<?php

/**
 * @package CherrycakeApp
 */

namespace CherrycakeApp;

/**
 * An StatsEvent to gather statistics about how many times a documentation page is viewed
 * 
 * @package CherrycakeApp
 * @category AppClasses
 */
class StatsEventDocumentationPageView extends \Cherrycake\StatsEvent {
	protected $timeResolution = \Cherrycake\Modules\STATS_EVENT_TIME_RESOLUTION_DAY;
	protected $typeDescription = "Documentation page view";

	function loadInline($data = false) {
		$data["subType"] = $data["pageName"];
		return parent::loadInline($data);
	}
}   