<?php

class Subsidiary extends Record {
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $parent;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var boolean
	 */
	public $showSubsidiaryName;
	/**
	 * @access public
	 * @var string
	 */
	public $url;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $logo;
	/**
	 * @access public
	 * @var string
	 */
	public $tranPrefix;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $pageLogo;
	/**
	 * @access public
	 * @var string
	 */
	public $state;
	/**
	 * @access public
	 * @var Country
	 */
	public $country;
	/**
	 * @access public
	 * @var Address
	 */
	public $mainAddress;
	/**
	 * @access public
	 * @var Address
	 */
	public $shippingAddress;
	/**
	 * @access public
	 * @var Address
	 */
	public $returnAddress;
	/**
	 * @access public
	 * @var string
	 */
	public $legalName;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isElimination;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $fiscalCalendar;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxFiscalCalendar;
	/**
	 * @access public
	 * @var boolean
	 */
	public $allowPayroll;
	/**
	 * @access public
	 * @var string
	 */
	public $email;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $currency;
	/**
	 * @access public
	 * @var float
	 */
	public $purchaseOrderQuantity;
	/**
	 * @access public
	 * @var float
	 */
	public $purchaseOrderAmount;
	/**
	 * @access public
	 * @var float
	 */
	public $purchaseOrderQuantityDiff;
	/**
	 * @access public
	 * @var float
	 */
	public $receiptQuantity;
	/**
	 * @access public
	 * @var float
	 */
	public $receiptAmount;
	/**
	 * @access public
	 * @var float
	 */
	public $receiptQuantityDiff;
	/**
	 * @access public
	 * @var string
	 */
	public $fax;
	/**
	 * @access public
	 * @var string
	 */
	public $edition;
	/**
	 * @access public
	 * @var string
	 */
	public $federalIdNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $addrLanguage;
	/**
	 * @access public
	 * @var string
	 */
	public $nonConsol;
	/**
	 * @access public
	 * @var string
	 */
	public $consol;
	/**
	 * @access public
	 * @var string
	 */
	public $state1TaxNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $ssnOrTin;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $interCoAccount;
	/**
	 * @access public
	 * @var SubsidiaryNexusList
	 */
	public $nexusList;
	/**
	 * @access public
	 * @var SubsidiaryAccountingBookDetailList
	 */
	public $accountingBookDetailList;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $checkLayout;
	/**
	 * @access public
	 * @var string
	 */
	public $inboundEmail;
	/**
	 * @access public
	 * @var ClassTranslationList
	 */
	public $classTranslationList;
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
		"name" => "string",
		"parent" => "RecordRef",
		"isInactive" => "boolean",
		"showSubsidiaryName" => "boolean",
		"url" => "string",
		"logo" => "RecordRef",
		"tranPrefix" => "string",
		"pageLogo" => "RecordRef",
		"state" => "string",
		"country" => "Country",
		"mainAddress" => "Address",
		"shippingAddress" => "Address",
		"returnAddress" => "Address",
		"legalName" => "string",
		"isElimination" => "boolean",
		"fiscalCalendar" => "RecordRef",
		"taxFiscalCalendar" => "RecordRef",
		"allowPayroll" => "boolean",
		"email" => "string",
		"currency" => "RecordRef",
		"purchaseOrderQuantity" => "float",
		"purchaseOrderAmount" => "float",
		"purchaseOrderQuantityDiff" => "float",
		"receiptQuantity" => "float",
		"receiptAmount" => "float",
		"receiptQuantityDiff" => "float",
		"fax" => "string",
		"edition" => "string",
		"federalIdNumber" => "string",
		"addrLanguage" => "string",
		"nonConsol" => "string",
		"consol" => "string",
		"state1TaxNumber" => "string",
		"ssnOrTin" => "string",
		"interCoAccount" => "RecordRef",
		"nexusList" => "SubsidiaryNexusList",
		"accountingBookDetailList" => "SubsidiaryAccountingBookDetailList",
		"checkLayout" => "RecordRef",
		"inboundEmail" => "string",
		"classTranslationList" => "ClassTranslationList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
