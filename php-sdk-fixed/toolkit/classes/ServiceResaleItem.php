<?php

class ServiceResaleItem extends Record {
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
	public $expenseAccount;
	/**
	 * @access public
	 * @var string
	 */
	public $salesDescription;
	/**
	 * @access public
	 * @var boolean
	 */
	public $includeChildren;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $incomeAccount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxSchedule;
	/**
	 * @access public
	 * @var ItemMatrixType
	 */
	public $matrixType;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isTaxable;
	/**
	 * @access public
	 * @var ItemCostEstimateType
	 */
	public $costEstimateType;
	/**
	 * @access public
	 * @var float
	 */
	public $costEstimate;
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
	public $saleUnit;
	/**
	 * @access public
	 * @var string
	 */
	public $costEstimateUnits;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $issueProduct;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $billingSchedule;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $deferredRevenueAccount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $revRecSchedule;
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
	 * @var boolean
	 */
	public $deferRevRec;
	/**
	 * @access public
	 * @var integer
	 */
	public $amortizationPeriod;
	/**
	 * @access public
	 * @var integer
	 */
	public $minimumQuantity;
	/**
	 * @access public
	 * @var boolean
	 */
	public $enforceMinQtyInternally;
	/**
	 * @access public
	 * @var string
	 */
	public $softDescriptor;
	/**
	 * @access public
	 * @var boolean
	 */
	public $pricesIncludeTax;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $quantityPricingSchedule;
	/**
	 * @access public
	 * @var boolean
	 */
	public $useMarginalRates;
	/**
	 * @access public
	 * @var ItemOverallQuantityPricingType
	 */
	public $overallQuantityPricingType;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isFulfillable;
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
	 * @var RecordRef
	 */
	public $pricingGroup;
	/**
	 * @access public
	 * @var string
	 */
	public $minimumQuantityUnits;
	/**
	 * @access public
	 * @var float
	 */
	public $vsoePrice;
	/**
	 * @access public
	 * @var VsoeSopGroup
	 */
	public $vsoeSopGroup;
	/**
	 * @access public
	 * @var VsoeDeferral
	 */
	public $vsoeDeferral;
	/**
	 * @access public
	 * @var VsoePermitDiscount
	 */
	public $vsoePermitDiscount;
	/**
	 * @access public
	 * @var boolean
	 */
	public $vsoeDelivered;
	/**
	 * @access public
	 * @var boolean
	 */
	public $createJob;
	/**
	 * @access public
	 * @var string
	 */
	public $storeDisplayName;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $storeDisplayThumbnail;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $storeDisplayImage;
	/**
	 * @access public
	 * @var string
	 */
	public $storeDescription;
	/**
	 * @access public
	 * @var string
	 */
	public $storeDetailedDescription;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $storeItemTemplate;
	/**
	 * @access public
	 * @var string
	 */
	public $pageTitle;
	/**
	 * @access public
	 * @var string
	 */
	public $urlComponent;
	/**
	 * @access public
	 * @var string
	 */
	public $metaTagHtml;
	/**
	 * @access public
	 * @var boolean
	 */
	public $excludeFromSitemap;
	/**
	 * @access public
	 * @var SitemapPriority
	 */
	public $sitemapPriority;
	/**
	 * @access public
	 * @var string
	 */
	public $searchKeywords;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isDonationItem;
	/**
	 * @access public
	 * @var boolean
	 */
	public $showDefaultDonationAmount;
	/**
	 * @access public
	 * @var float
	 */
	public $maxDonationAmount;
	/**
	 * @access public
	 * @var boolean
	 */
	public $dontShowPrice;
	/**
	 * @access public
	 * @var string
	 */
	public $noPriceMessage;
	/**
	 * @access public
	 * @var string
	 */
	public $outOfStockMessage;
	/**
	 * @access public
	 * @var boolean
	 */
	public $onSpecial;
	/**
	 * @access public
	 * @var ItemOutOfStockBehavior
	 */
	public $outOfStockBehavior;
	/**
	 * @access public
	 * @var string
	 */
	public $relatedItemsDescription;
	/**
	 * @access public
	 * @var string
	 */
	public $specialsDescription;
	/**
	 * @access public
	 * @var ServiceItemTaskTemplatesList
	 */
	public $itemTaskTemplatesList;
	/**
	 * @access public
	 * @var string
	 */
	public $featuredDescription;
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
	public $isOnline;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isGcoCompliant;
	/**
	 * @access public
	 * @var boolean
	 */
	public $offerSupport;
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
	 * @var string
	 */
	public $currency;
	/**
	 * @access public
	 * @var BillingRatesMatrix
	 */
	public $billingRatesMatrix;
	/**
	 * @access public
	 * @var ItemAccountingBookDetailList
	 */
	public $accountingBookDetailList;
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
	 * @var PricingMatrix
	 */
	public $pricingMatrix;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $purchaseTaxCode;
	/**
	 * @access public
	 * @var float
	 */
	public $rate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $salesTaxCode;
	/**
	 * @access public
	 * @var SiteCategoryList
	 */
	public $siteCategoryList;
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
	 * @var PresentationItemList
	 */
	public $presentationItemList;
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
		"expenseAccount" => "RecordRef",
		"salesDescription" => "string",
		"includeChildren" => "boolean",
		"incomeAccount" => "RecordRef",
		"taxSchedule" => "RecordRef",
		"matrixType" => "ItemMatrixType",
		"isTaxable" => "boolean",
		"costEstimateType" => "ItemCostEstimateType",
		"costEstimate" => "float",
		"unitsType" => "RecordRef",
		"purchaseUnit" => "RecordRef",
		"saleUnit" => "RecordRef",
		"costEstimateUnits" => "string",
		"issueProduct" => "RecordRef",
		"billingSchedule" => "RecordRef",
		"deferredRevenueAccount" => "RecordRef",
		"revRecSchedule" => "RecordRef",
		"deferralAccount" => "RecordRef",
		"amortizationTemplate" => "RecordRef",
		"residual" => "string",
		"deferRevRec" => "boolean",
		"amortizationPeriod" => "integer",
		"minimumQuantity" => "integer",
		"enforceMinQtyInternally" => "boolean",
		"softDescriptor" => "string",
		"pricesIncludeTax" => "boolean",
		"quantityPricingSchedule" => "RecordRef",
		"useMarginalRates" => "boolean",
		"overallQuantityPricingType" => "ItemOverallQuantityPricingType",
		"isFulfillable" => "boolean",
		"costCategory" => "RecordRef",
		"purchaseOrderQuantity" => "float",
		"purchaseOrderAmount" => "float",
		"purchaseOrderQuantityDiff" => "float",
		"receiptQuantity" => "float",
		"receiptAmount" => "float",
		"receiptQuantityDiff" => "float",
		"pricingGroup" => "RecordRef",
		"minimumQuantityUnits" => "string",
		"vsoePrice" => "float",
		"vsoeSopGroup" => "VsoeSopGroup",
		"vsoeDeferral" => "VsoeDeferral",
		"vsoePermitDiscount" => "VsoePermitDiscount",
		"vsoeDelivered" => "boolean",
		"createJob" => "boolean",
		"storeDisplayName" => "string",
		"storeDisplayThumbnail" => "RecordRef",
		"storeDisplayImage" => "RecordRef",
		"storeDescription" => "string",
		"storeDetailedDescription" => "string",
		"storeItemTemplate" => "RecordRef",
		"pageTitle" => "string",
		"urlComponent" => "string",
		"metaTagHtml" => "string",
		"excludeFromSitemap" => "boolean",
		"sitemapPriority" => "SitemapPriority",
		"searchKeywords" => "string",
		"isDonationItem" => "boolean",
		"showDefaultDonationAmount" => "boolean",
		"maxDonationAmount" => "float",
		"dontShowPrice" => "boolean",
		"noPriceMessage" => "string",
		"outOfStockMessage" => "string",
		"onSpecial" => "boolean",
		"outOfStockBehavior" => "ItemOutOfStockBehavior",
		"relatedItemsDescription" => "string",
		"specialsDescription" => "string",
		"itemTaskTemplatesList" => "ServiceItemTaskTemplatesList",
		"featuredDescription" => "string",
		"customForm" => "RecordRef",
		"itemId" => "string",
		"upcCode" => "string",
		"displayName" => "string",
		"vendorName" => "string",
		"parent" => "RecordRef",
		"isOnline" => "boolean",
		"isGcoCompliant" => "boolean",
		"offerSupport" => "boolean",
		"isInactive" => "boolean",
		"availableToPartners" => "boolean",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"subsidiaryList" => "RecordRefList",
		"currency" => "string",
		"billingRatesMatrix" => "BillingRatesMatrix",
		"accountingBookDetailList" => "ItemAccountingBookDetailList",
		"itemOptionsList" => "ItemOptionsList",
		"matrixOptionList" => "MatrixOptionList",
		"itemVendorList" => "ItemVendorList",
		"pricingMatrix" => "PricingMatrix",
		"purchaseTaxCode" => "RecordRef",
		"rate" => "float",
		"salesTaxCode" => "RecordRef",
		"siteCategoryList" => "SiteCategoryList",
		"translationsList" => "TranslationList",
		"vendor" => "RecordRef",
		"presentationItemList" => "PresentationItemList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
