<?php

class ExpenseReport extends Record {
	/**
	 * @access public
	 * @var dateTime
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var string
	 */
	public $status;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $account;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $entity;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var string
	 */
	public $tranId;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $postingPeriod;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $tranDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $dueDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $approvalStatus;
	/**
	 * @access public
	 * @var float
	 */
	public $total;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $nextApprover;
	/**
	 * @access public
	 * @var float
	 */
	public $advance;
	/**
	 * @access public
	 * @var float
	 */
	public $tax1Amt;
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
	 * @var boolean
	 */
	public $complete;
	/**
	 * @access public
	 * @var boolean
	 */
	public $supervisorApproval;
	/**
	 * @access public
	 * @var boolean
	 */
	public $accountingApproval;
	/**
	 * @access public
	 * @var boolean
	 */
	public $useMultiCurrency;
	/**
	 * @access public
	 * @var float
	 */
	public $tax2Amt;
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
	 * @var ExpenseReportExpenseList
	 */
	public $expenseList;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $externalId;

	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"status" => "string",
		"customForm" => "RecordRef",
		"account" => "RecordRef",
		"entity" => "RecordRef",
		"subsidiary" => "RecordRef",
		"tranId" => "string",
		"postingPeriod" => "RecordRef",
		"tranDate" => "dateTime",
		"dueDate" => "dateTime",
		"approvalStatus" => "RecordRef",
		"total" => "float",
		"nextApprover" => "RecordRef",
		"advance" => "float",
		"tax1Amt" => "float",
		"amount" => "float",
		"memo" => "string",
		"complete" => "boolean",
		"supervisorApproval" => "boolean",
		"accountingApproval" => "boolean",
		"useMultiCurrency" => "boolean",
		"tax2Amt" => "float",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"expenseList" => "ExpenseReportExpenseList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
