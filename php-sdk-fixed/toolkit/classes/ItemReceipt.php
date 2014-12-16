<?php

class ItemReceipt extends Record {
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
	 * @var float
	 */
	public $exchangeRate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $entity;
	/**
	 * @access public
	 * @var string
	 */
	public $currencyName;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $createdFrom;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $tranDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $partner;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $postingPeriod;
	/**
	 * @access public
	 * @var string
	 */
	public $tranId;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $currency;
	/**
	 * @access public
	 * @var LandedCostMethod
	 */
	public $landedCostMethod;
	/**
	 * @access public
	 * @var boolean
	 */
	public $landedCostPerLine;
	/**
	 * @access public
	 * @var ItemReceiptItemList
	 */
	public $itemList;
	/**
	 * @access public
	 * @var ItemReceiptExpenseList
	 */
	public $expenseList;
	/**
	 * @access public
	 * @var PurchLandedCostList
	 */
	public $landedCostsList;
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
		"exchangeRate" => "float",
		"entity" => "RecordRef",
		"currencyName" => "string",
		"subsidiary" => "RecordRef",
		"createdFrom" => "RecordRef",
		"tranDate" => "dateTime",
		"partner" => "RecordRef",
		"postingPeriod" => "RecordRef",
		"tranId" => "string",
		"memo" => "string",
		"currency" => "RecordRef",
		"landedCostMethod" => "LandedCostMethod",
		"landedCostPerLine" => "boolean",
		"itemList" => "ItemReceiptItemList",
		"expenseList" => "ItemReceiptExpenseList",
		"landedCostsList" => "PurchLandedCostList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
