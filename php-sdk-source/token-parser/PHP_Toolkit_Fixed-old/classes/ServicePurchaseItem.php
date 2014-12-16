<?php

class ServicePurchaseItem extends Record {
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
	public $purchaseDescription;
	/**
	 * @access public
	 * @var boolean
	 */
	public $manufacturingChargeItem;
	/**
	 * @access public
	 * @var float
	 */
	public $cost;
	/**
	 * @access public
	 * @var string
	 */
	public $costUnits;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $issueProduct;
	/**
	 * @access public
	 * @var boolean
	 */
	public $includeChildren;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $expenseAccount;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isTaxable;
	/**
	 * @access public
	 * @var ItemMatrixType
	 */
	public $matrixType;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $unitsType;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $purchaseUnit;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var string
	 */
	public $itemId;
	/**
	 * @access public
	 * @var string
	 */
	public $upcCode;
	/**
	 * @access public
	 * @var string
	 */
	public $displayName;
	/**
	 * @access public
	 * @var string
	 */
	public $vendorName;
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
	public $availableToPartners;
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
	 * @var RecordRefList
	 */
	public $subsidiaryList;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxSchedule;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $deferralAccount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $amortizationTemplate;
	/**
	 * @access public
	 * @var string
	 */
	public $residual;
	/**
	 * @access public
	 * @var integer
	 */
	public $amortizationPeriod;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isFulfillable;
	/**
	 * @access public
	 * @var ItemAccountingBookDetailList
	 */
	public $accountingBookDetailList;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $costCategory;
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
	public $currency;
	/**
	 * @access public
	 * @var ItemOptionsList
	 */
	public $itemOptionsList;
	/**
	 * @access public
	 * @var MatrixOptionList
	 */
	public $matrixOptionList;
	/**
	 * @access public
	 * @var ItemVendorList
	 */
	public $itemVendorList;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $purchaseTaxCode;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $salesTaxCode;
	/**
	 * @access public
	 * @var TranslationList
	 */
	public $translationsList;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $vendor;
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
		"purchaseDescription" => "string",
		"manufacturingChargeItem" => "boolean",
		"cost" => "float",
		"costUnits" => "string",
		"issueProduct" => "RecordRef",
		"includeChildren" => "boolean",
		"expenseAccount" => "RecordRef",
		"isTaxable" => "boolean",
		"matrixType" => "ItemMatrixType",
		"unitsType" => "RecordRef",
		"purchaseUnit" => "RecordRef",
		"customForm" => "RecordRef",
		"itemId" => "string",
		"upcCode" => "string",
		"displayName" => "string",
		"vendorName" => "string",
		"parent" => "RecordRef",
		"isInactive" => "boolean",
		"availableToPartners" => "boolean",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"subsidiaryList" => "RecordRefList",
		"taxSchedule" => "RecordRef",
		"deferralAccount" => "RecordRef",
		"amortizationTemplate" => "RecordRef",
		"residual" => "string",
		"amortizationPeriod" => "integer",
		"isFulfillable" => "boolean",
		"accountingBookDetailList" => "ItemAccountingBookDetailList",
		"costCategory" => "RecordRef",
		"purchaseOrderQuantity" => "float",
		"purchaseOrderAmount" => "float",
		"purchaseOrderQuantityDiff" => "float",
		"receiptQuantity" => "float",
		"receiptAmount" => "float",
		"receiptQuantityDiff" => "float",
		"currency" => "string",
		"itemOptionsList" => "ItemOptionsList",
		"matrixOptionList" => "MatrixOptionList",
		"itemVendorList" => "ItemVendorList",
		"purchaseTaxCode" => "RecordRef",
		"salesTaxCode" => "RecordRef",
		"translationsList" => "TranslationList",
		"vendor" => "RecordRef",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
