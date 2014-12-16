<?php

class ItemNumberCustomFieldFilter {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $fldFilter;
	/**
	 * @access public
	 * @var boolean
	 */
	public $fldFilterChecked;
	/**
	 * @access public
	 * @var CustomizationFilterCompareType
	 */
	public $fldFilterCompareType;
	/**
	 * @access public
	 * @var string
	 */
	public $fldFilterVal;
	/**
	 * @access public
	 * @var boolean
	 */
	public $fldFilterNotNull;
	/**
	 * @access public
	 * @var boolean
	 */
	public $fldfilterNull;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $fldCompareField;

	static $paramtypesmap = array(
		"fldFilter" => "RecordRef",
		"fldFilterChecked" => "boolean",
		"fldFilterCompareType" => "CustomizationFilterCompareType",
		"fldFilterVal" => "string",
		"fldFilterNotNull" => "boolean",
		"fldfilterNull" => "boolean",
		"fldCompareField" => "RecordRef",
	);
    public static function create()
    {
        return new static();
    }
}
