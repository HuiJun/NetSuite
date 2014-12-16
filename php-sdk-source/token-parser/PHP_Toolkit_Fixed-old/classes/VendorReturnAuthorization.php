<?php

class VendorReturnAuthorization extends Record {
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
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var string
	 */
	public $tranId;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $createdFrom;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $entity;
	/**
	 * @access public
	 * @var VendorReturnAuthorizationOrderStatus
	 */
	public $orderStatus;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $tranDate;
	/**
	 * @access public
	 * @var float
	 */
	public $userTotal;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $currency;
	/**
	 * @access public
	 * @var string
	 */
	public $currencyName;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var float
	 */
	public $exchangeRate;
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
	public $subsidiary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $intercoTransaction;
	/**
	 * @access public
	 * @var IntercoStatus
	 */
	public $intercoStatus;
	/**
	 * @access public
	 * @var VendorReturnAuthorizationExpenseList
	 */
	public $expenseList;
	/**
	 * @access public
	 * @var VendorReturnAuthorizationItemList
	 */
	public $itemList;
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
		"customForm" => "RecordRef",
		"tranId" => "string",
		"createdFrom" => "RecordRef",
		"entity" => "RecordRef",
		"orderStatus" => "VendorReturnAuthorizationOrderStatus",
		"tranDate" => "dateTime",
		"userTotal" => "float",
		"currency" => "RecordRef",
		"currencyName" => "string",
		"memo" => "string",
		"exchangeRate" => "float",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"subsidiary" => "RecordRef",
		"intercoTransaction" => "RecordRef",
		"intercoStatus" => "IntercoStatus",
		"expenseList" => "VendorReturnAuthorizationExpenseList",
		"itemList" => "VendorReturnAuthorizationItemList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
