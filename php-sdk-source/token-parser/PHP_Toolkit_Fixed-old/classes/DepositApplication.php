<?php

class DepositApplication extends Record {
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
	public $arAcct;
	/**
	 * @access public
	 * @var string
	 */
	public $status;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customer;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $tranDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $postingPeriod;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $deposit;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $depDate;
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
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var float
	 */
	public $total;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $department;
	/**
	 * @access public
	 * @var float
	 */
	public $applied;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $class;
	/**
	 * @access public
	 * @var float
	 */
	public $unapplied;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $location;
	/**
	 * @access public
	 * @var string
	 */
	public $tranId;
	/**
	 * @access public
	 * @var DepositApplicationApplyList
	 */
	public $applyList;
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
		"arAcct" => "string",
		"status" => "string",
		"customer" => "RecordRef",
		"tranDate" => "dateTime",
		"postingPeriod" => "RecordRef",
		"deposit" => "RecordRef",
		"depDate" => "dateTime",
		"currency" => "RecordRef",
		"exchangeRate" => "float",
		"memo" => "string",
		"subsidiary" => "RecordRef",
		"total" => "float",
		"department" => "RecordRef",
		"applied" => "float",
		"class" => "RecordRef",
		"unapplied" => "float",
		"location" => "RecordRef",
		"tranId" => "string",
		"applyList" => "DepositApplicationApplyList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
