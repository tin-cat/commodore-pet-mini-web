<?php

/**
 * RequestPathComponent
 *
 * @package Cherrycake
 */

namespace Cherrycake;

const REQUEST_PATH_COMPONENT_TYPE_FIXED = 0;
const REQUEST_PATH_COMPONENT_TYPE_VARIABLE_STRING = 1;
const REQUEST_PATH_COMPONENT_TYPE_VARIABLE_NUMERIC = 2;

/**
 * Request
 *
 * A class that represents a path component of a Request
 *
 * @package Cherrycake
 * @category Classes
 */
class RequestPathComponent {
	public $name = false;
	public $type;
	public $string = false;
	private $value;
	private $securityRules = false;
	private $filters = false;

	/**
	 * RequestPathComponent
	 *
	 * Constructor
	 */
	function __construct($setup) {
		if (isset($setup["name"]))
			$this->name = $setup["name"];

		$this->type = $setup["type"];

		if (isset($setup["string"]))
			$this->string = $setup["string"];

		if (isset($setup["securityRules"]))
			$this->securityRules = $setup["securityRules"];

		if (isset($setup["filters"]))
			$this->filters = $setup["filters"];
	}

	/**
	 * isMatchesString
	 *
	 * Checks whether the given string matches this RequestPathComponent syntax, to know if the given string is or could be representing this RequestPathComponent
	 *
	 * @param string $string The string to check against to
	 * @return bool Returns true if the given $string is or could be representing this RequestPathComponent
	 */
	function isMatchesString($string) {
		switch ($this->type) {
			case REQUEST_PATH_COMPONENT_TYPE_FIXED:
				return (strcasecmp($string, $this->string) == 0 ? true : false);
				break;

			case REQUEST_PATH_COMPONENT_TYPE_VARIABLE_STRING:
				return true;
				break;

			case REQUEST_PATH_COMPONENT_TYPE_VARIABLE_NUMERIC:
				return is_numeric($string);
				break;
		}
	}

	/**
	 * getTypeName
	 *
	 * @return string The name of this RequestPathComponent's type, mainly for debugging purposes
	 */
	function getTypeName() {
		switch ($this->type) {
			case REQUEST_PATH_COMPONENT_TYPE_FIXED:
				return "Fixed";
				break;
			case REQUEST_PATH_COMPONENT_TYPE_VARIABLE_STRING:
				return "String";
				break;
			case REQUEST_PATH_COMPONENT_TYPE_VARIABLE_NUMERIC:
				return "Numeric";
				break;
		}
	}

	/**
	 * getValue
	 *
	 * @return string Returns the value passed for this path component, if its type is either REQUEST_PATH_COMPONENT_TYPE_VARIABLE_STRING or REQUEST_PATH_COMPONENT_TYPE_VARIABLE_NUMERIC
	 */
	function getValue() {
		return $this->value;
	}

	/**
	 * setValue
	 *
	 * Sets the value for this path component. Intented to apply only for REQUEST_PATH_COMPONENT_TYPE_VARIABLE_STRING and REQUEST_PATH_COMPONENT_TYPE_VARIABLE_NUMERIC types
	 *
	 * @param mixed $value The value for this path component
	 */
	function setValue($value) {
		global $e;
		$this->value = $e->Security->filterValue($value, $this->filters);
	}

	/**
	 * checkValueSecurity
	 *
	 * Checks this path component's value against its configured security rules (and/or the Security defaulted rules)
	 *
	 * @return Result A Result object, like Security::checkValue
	 */
	function checkValueSecurity() {
		global $e;
		return $e->Security->checkValue($this->getValue(), $this->securityRules);
	}

	/**
	 * debug
	 *
	 * @return string Debug info about this RequestPathComponent
	 */
	function debug() {
		$r = "<ul>";
		$r .= "<li><b>Name:</b> ".($this->name ? $this->name : "unnamed")."</li>";
		$r .= "<ul>";
		$r .= "<li><b>Value:</b> ".$this->getValue()."</li>";
		$r .= "<li><b>Type:</b> ".$this->getTypeName()."</li>";
		if ($this->string)
			$r .= "<li><b>String:</b> ".$this->string."</li>";
		if ($this->securityRules) {
			$r .= "<li><b>Security rules:</b><ul>";
			foreach ($this->securityRules as $securityRule)
				$r .= "<li>".$securityRule."</li>";
			$r .= "</ul>";
			reset($this->securityRules);
		}
		if ($this->filters) {
			$r .= "<li><b>Filters:</b><ul>";
			foreach ($this->filters as $filter)
				$r .= "<li>".$filter."</li>";
			$r .= "</ul>";
			reset($this->filters);
		}
		$r .= "</ul></ul>";
		return $r;
	}
}