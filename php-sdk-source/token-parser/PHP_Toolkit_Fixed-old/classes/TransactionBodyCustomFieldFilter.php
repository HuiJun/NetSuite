<?php

class TransactionBodyCustomFieldFilter {
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
	 * @var FldFilterSelList
	 */
	public $fldFilterSelList;
	/**
	 * @access public
	 * @var boolean
	 */
	public $fldFilterNotNull;

	static $paramtypesmap = array(
		"fldFilter" => "RecordRef",
		"fldFilterChecked" => "boolean",
		"fldFilterCompareType" => "CustomizationFilterCompareType",
		"fldFilterVal" => "string",
		"fldFilterSelList" => "FldFilterSelList",
		"fldFilterNotNull" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
