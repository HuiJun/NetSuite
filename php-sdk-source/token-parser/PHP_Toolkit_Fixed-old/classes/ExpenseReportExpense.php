<?php

class ExpenseReportExpense {
	/**
	 * @access public
	 * @var integer
	 */
	public $line;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $expenseDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $category;
	/**
	 * @access public
	 * @var float
	 */
	public $quantity;
	/**
	 * @access public
	 * @var float
	 */
	public $rate;
	/**
	 * @access public
	 * @var float
	 */
	public $foreignAmount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $currency;
	/**
	 * @access public
	 * @var float
	 */
	public $exchangeRate;
	/**
	 * @access public
	 * @var float
	 */
	public $amount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxCode;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var float
	 */
	public $taxRate1;
	/**
	 * @access public
	 * @var float
	 */
	public $tax1Amt;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $department;
	/**
	 * @access public
	 * @var float
	 */
	public $grossAmt;
	/**
	 * @access public
	 * @var float
	 */
	public $taxRate2;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $class;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customer;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $location;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isBillable;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $expMediaItem;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isNonReimbursable;
	/**
	 * @access public
	 * @var boolean
	 */
	public $receipt;
	/**
	 * @access public
	 * @var integer
	 */
	public $refNumber;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"line" => "integer",
		"expenseDate" => "dateTime",
		"category" => "RecordRef",
		"quantity" => "float",
		"rate" => "float",
		"foreignAmount" => "float",
		"currency" => "RecordRef",
		"exchangeRate" => "float",
		"amount" => "float",
		"taxCode" => "RecordRef",
		"memo" => "string",
		"taxRate1" => "float",
		"tax1Amt" => "float",
		"department" => "RecordRef",
		"grossAmt" => "float",
		"taxRate2" => "float",
		"class" => "RecordRef",
		"customer" => "RecordRef",
		"location" => "RecordRef",
		"isBillable" => "boolean",
		"expMediaItem" => "RecordRef",
		"isNonReimbursable" => "boolean",
		"receipt" => "boolean",
		"refNumber" => "integer",
		"customFieldList" => "CustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
