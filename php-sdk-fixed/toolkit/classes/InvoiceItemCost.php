<?php

class InvoiceItemCost {
	/**
	 * @access public
	 * @var boolean
	 */
	public $apply;
	/**
	 * @access public
	 * @var integer
	 */
	public $doc;
	/**
	 * @access public
	 * @var integer
	 */
	public $line;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $billedDate;
	/**
	 * @access public
	 * @var string
	 */
	public $itemDisp;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var string
	 */
	public $jobDisp;
	/**
	 * @access public
	 * @var string
	 */
	public $department;
	/**
	 * @access public
	 * @var string
	 */
	public $class;
	/**
	 * @access public
	 * @var string
	 */
	public $location;
	/**
	 * @access public
	 * @var string
	 */
	public $unitDisp;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $options;
	/**
	 * @access public
	 * @var string
	 */
	public $itemCostCount;
	/**
	 * @access public
	 * @var string
	 */
	public $quantity;
	/**
	 * @access public
	 * @var string
	 */
	public $serialNumbers;
	/**
	 * @access public
	 * @var float
	 */
	public $cost;
	/**
	 * @access public
	 * @var float
	 */
	public $amount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $revRecSchedule;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $revRecStartDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $revRecEndDate;
	/**
	 * @access public
	 * @var float
	 */
	public $grossAmt;
	/**
	 * @access public
	 * @var float
	 */
	public $tax1Amt;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxCode;
	/**
	 * @access public
	 * @var float
	 */
	public $taxRate1;
	/**
	 * @access public
	 * @var float
	 */
	public $taxRate2;

	static $paramtypesmap = array(
		"apply" => "boolean",
		"doc" => "integer",
		"line" => "integer",
		"billedDate" => "dateTime",
		"itemDisp" => "string",
		"memo" => "string",
		"jobDisp" => "string",
		"department" => "string",
		"class" => "string",
		"location" => "string",
		"unitDisp" => "string",
		"options" => "CustomFieldList",
		"itemCostCount" => "string",
		"quantity" => "string",
		"serialNumbers" => "string",
		"cost" => "float",
		"amount" => "float",
		"revRecSchedule" => "RecordRef",
		"revRecStartDate" => "dateTime",
		"revRecEndDate" => "dateTime",
		"grossAmt" => "float",
		"tax1Amt" => "float",
		"taxCode" => "RecordRef",
		"taxRate1" => "float",
		"taxRate2" => "float",
	);
    public static function create()
    {
        return new static();
    }
}
