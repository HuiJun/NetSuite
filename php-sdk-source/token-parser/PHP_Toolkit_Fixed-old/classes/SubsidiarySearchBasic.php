<?php

class SubsidiarySearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $accountingBook;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $accountingBookCurrency;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $address;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $city;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $country;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $currency;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $email;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $fax;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isElimination;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $legalName;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $nameNoHierarchy;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $phone;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $purchaseOrderAmount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $purchaseOrderQuantity;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $purchaseOrderQuantityDiff;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $receiptAmount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $receiptQuantity;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $receiptQuantityDiff;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $state;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $taxIdNum;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $tranPrefix;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $url;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $zip;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"accountingBook" => "SearchMultiSelectField",
		"accountingBookCurrency" => "SearchMultiSelectField",
		"address" => "SearchStringField",
		"city" => "SearchStringField",
		"country" => "SearchEnumMultiSelectField",
		"currency" => "SearchMultiSelectField",
		"email" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"fax" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isElimination" => "SearchBooleanField",
		"isInactive" => "SearchBooleanField",
		"legalName" => "SearchStringField",
		"name" => "SearchStringField",
		"nameNoHierarchy" => "SearchStringField",
		"phone" => "SearchStringField",
		"purchaseOrderAmount" => "SearchDoubleField",
		"purchaseOrderQuantity" => "SearchDoubleField",
		"purchaseOrderQuantityDiff" => "SearchDoubleField",
		"receiptAmount" => "SearchDoubleField",
		"receiptQuantity" => "SearchDoubleField",
		"receiptQuantityDiff" => "SearchDoubleField",
		"state" => "SearchStringField",
		"taxIdNum" => "SearchStringField",
		"tranPrefix" => "SearchStringField",
		"url" => "SearchStringField",
		"zip" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
