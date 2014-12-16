<?php

class PurchaseOrderExpense {
	/**
	 * @access public
	 * @var integer
	 */
	public $line;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $category;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $linkedOrderList;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $account;
	/**
	 * @access public
	 * @var float
	 */
	public $amount;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $department;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $class;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $location;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customer;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isClosed;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isBillable;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $createdFrom;
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
	/**
	 * @access public
	 * @var float
	 */
	public $tax1Amt;
	/**
	 * @access public
	 * @var float
	 */
	public $grossAmt;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"line" => "integer",
		"category" => "RecordRef",
		"linkedOrderList" => "RecordRefList",
		"account" => "RecordRef",
		"amount" => "float",
		"memo" => "string",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"customer" => "RecordRef",
		"isClosed" => "boolean",
		"isBillable" => "boolean",
		"createdFrom" => "RecordRef",
		"taxCode" => "RecordRef",
		"taxRate1" => "float",
		"taxRate2" => "float",
		"tax1Amt" => "float",
		"grossAmt" => "float",
		"customFieldList" => "CustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
