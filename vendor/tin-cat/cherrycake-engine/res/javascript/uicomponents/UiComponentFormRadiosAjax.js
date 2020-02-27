(function($){

	$.UiComponentFormRadiosAjax = function(el, options) {
		var base = this, o;
		base.el = el;
		base.$el = $(el);

		base.$el.data('UiComponentFormRadiosAjax', base);

		base.init = function() {
			base.options = o = $.extend({}, $.UiComponentFormRadiosAjax.defaults, options);
			$('input[type=radio]', base.el).on('change', function() {
				base.changed();
			});
			$('.UiComponentFormRadio', base.el).each(function(idx, item) {
				$('> div', item).on('click', function() {
					base.setValue($('input[type=radio]', item).val());
				});
			});
		}

		base.getValue = function() {
			return $('input[type=radio]:checked', base.el).val();
		}

		base.setValue = function(value) {
			$('input[type=radio]', base.el).filter('[value='+value+']').prop('checked', true);
			base.changed();
		}

		base.changed = function(e) {
			base.save();
		}

		base.save = function(p) {
			base.setLoading();
			var data = {};
			data[o.saveAjaxKey] = base.getValue();
			ajaxQuery(o.saveAjaxUrl, {
				data: data,
				onError: function() {
					base.unsetLoading();
					if (o.isShakeOnError)
						base.shake();
					base.setError();
					if (p && p.onError)
						p.onError();
				},
				onSuccess: function(data) {
					base.unsetLoading();
					base.unsetError();
					if (p && p.onSuccess)
						p.onSuccess();
				}
			});
		}

		base.setError = function() {
			$(base.el).addClass('error');
		}

		base.unsetError = function() {
			$(base.el).removeClass('error');
		}

		base.isError = function() {
			return $(base.el).hasClass('error');
		}

		base.shake = function() {
			animationEffectShake(base.el);
		}

		base.setLoading = function() {
			$(base.el).addClass('loading');
		}

		base.unsetLoading = function() {
			$(base.el).removeClass('loading');
		}

		base.init();
	}

	$.UiComponentFormRadiosAjax.defaults = {
		saveOnEnter: true,
		saveAjaxUrl: false,
		saveAjaxKey: false,
		isShakeOnError: true
	};

	$.fn.UiComponentFormRadiosAjax = function(options, params) {
		return this.each(function(){
			var me = $(this).data('UiComponentFormRadiosAjax');
			if ((typeof(options)).match('object|undefined'))
				new $.UiComponentFormRadiosAjax(this, options);
			else
				eval('me.'+options)(params);
		});
	}

})(jQuery);