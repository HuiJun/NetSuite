<?php

class UnitsTypeUom {
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $unitName;
	/**
	 * @access public
	 * @var string
	 */
	public $pluralName;
	/**
	 * @access public
	 * @var string
	 */
	public $abbreviation;
	/**
	 * @access public
	 * @var string
	 */
	public $pluralAbbreviation;
	/**
	 * @access public
	 * @var float
	 */
	public $conversionRate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $baseUnit;

	static $paramtypesmap = array(
		"internalId" => "string",
		"unitName" => "string",
		"pluralName" => "string",
		"abbreviation" => "string",
		"pluralAbbreviation" => "string",
		"conversionRate" => "float",
		"baseUnit" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
