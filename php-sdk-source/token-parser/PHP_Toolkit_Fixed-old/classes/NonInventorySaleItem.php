<?php

class NonInventorySaleItem extends Record {
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
	public $taxSchedule;
	/**
	 * @access public
	 * @var float
	 */
	public $shippingCost;
	/**
	 * @access public
	 * @var string
	 */
	public $shippingCostUnits;
	/**
	 * @access public
	 * @var float
	 */
	public $handlingCost;
	/**
	 * @access public
	 * @var string
	 */
	public $handlingCostUnits;
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
	 * @var float
	 */
	public $weight;
	/**
	 * @access public
	 * @var ItemWeightUnit
	 */
	public $weightUnit;
	/**
	 * @access public
	 * @var string
	 */
	public $weightUnits;
	/**
	 * @access public
	 * @var string
	 */
	public $costEstimateUnits;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $unitsType;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $saleUnit;
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
	 * @var string
	 */
	public $stockDescription;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isHazmatItem;
	/**
	 * @access public
	 * @var string
	 */
	public $hazmatId;
	/**
	 * @access public
	 * @var string
	 */
	public $hazmatShippingName;
	/**
	 * @access public
	 * @var string
	 */
	public $hazmatHazardClass;
	/**
	 * @access public
	 * @var HazmatPackingGroup
	 */
	public $hazmatPackingGroup;
	/**
	 * @access public
	 * @var string
	 */
	public $hazmatItemUnits;
	/**
	 * @access public
	 * @var float
	 */
	public $hazmatItemUnitsQty;
	/**
	 * @access public
	 * @var boolean
	 */
	public $producer;
	/**
	 * @access public
	 * @var string
	 */
	public $manufacturer;
	/**
	 * @access public
	 * @var string
	 */
	public $mpn;
	/**
	 * @access public
	 * @var boolean
	 */
	public $multManufactureAddr;
	/**
	 * @access public
	 * @var string
	 */
	public $manufacturerAddr1;
	/**
	 * @access public
	 * @var string
	 */
	public $manufacturerCity;
	/**
	 * @access public
	 * @var string
	 */
	public $manufacturerState;
	/**
	 * @access public
	 * @var string
	 */
	public $manufacturerZip;
	/**
	 * @access public
	 * @var Country
	 */
	public $countryOfManufacture;
	/**
	 * @access public
	 * @var string
	 */
	public $manufacturerTaxId;
	/**
	 * @access public
	 * @var string
	 */
	public $scheduleBNumber;
	/**
	 * @access public
	 * @var integer
	 */
	public $scheduleBQuantity;
	/**
	 * @access public
	 * @var ScheduleBCode
	 */
	public $scheduleBCode;
	/**
	 * @access public
	 * @var string
	 */
	public $manufacturerTariff;
	/**
	 * @access public
	 * @var ItemPreferenceCriterion
	 */
	public $preferenceCriterion;
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
	 * @var RecordRef
	 */
	public $shipPackage;
	/**
	 * @access public
	 * @var boolean
	 */
	public $shipIndividually;
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
	public $deferRevRec;
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
	 * @var string
	 */
	public $featuredDescription;
	/**
	 * @access public
	 * @var string
	 */
	public $shoppingDotComCategory;
	/**
	 * @access public
	 * @var integer
	 */
	public $shopzillaCategoryId;
	/**
	 * @access public
	 * @var string
	 */
	public $nexTagCategory;
	/**
	 * @access public
	 * @var ProductFeedList
	 */
	public $productFeedList;
	/**
	 * @access public
	 * @var string
	 */
	public $urlComponent;
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
	 * @var RecordRef
	 */
	public $defaultItemShipMethod;
	/**
	 * @access public
	 * @var ItemCarrier
	 */
	public $itemCarrier;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $itemShipMethodList;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $subsidiaryList;
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
	 * @var PricingMatrix
	 */
	public $pricingMatrix;
	/**
	 * @access public
	 * @var ItemAccountingBookDetailList
	 */
	public $accountingBookDetailList;
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
		"salesDescription" => "string",
		"includeChildren" => "boolean",
		"incomeAccount" => "RecordRef",
		"isTaxable" => "boolean",
		"matrixType" => "ItemMatrixType",
		"taxSchedule" => "RecordRef",
		"shippingCost" => "float",
		"shippingCostUnits" => "string",
		"handlingCost" => "float",
		"handlingCostUnits" => "string",
		"costEstimateType" => "ItemCostEstimateType",
		"costEstimate" => "float",
		"weight" => "float",
		"weightUnit" => "ItemWeightUnit",
		"weightUnits" => "string",
		"costEstimateUnits" => "string",
		"unitsType" => "RecordRef",
		"saleUnit" => "RecordRef",
		"issueProduct" => "RecordRef",
		"billingSchedule" => "RecordRef",
		"deferredRevenueAccount" => "RecordRef",
		"revRecSchedule" => "RecordRef",
		"stockDescription" => "string",
		"isHazmatItem" => "boolean",
		"hazmatId" => "string",
		"hazmatShippingName" => "string",
		"hazmatHazardClass" => "string",
		"hazmatPackingGroup" => "HazmatPackingGroup",
		"hazmatItemUnits" => "string",
		"hazmatItemUnitsQty" => "float",
		"producer" => "boolean",
		"manufacturer" => "string",
		"mpn" => "string",
		"multManufactureAddr" => "boolean",
		"manufacturerAddr1" => "string",
		"manufacturerCity" => "string",
		"manufacturerState" => "string",
		"manufacturerZip" => "string",
		"countryOfManufacture" => "Country",
		"manufacturerTaxId" => "string",
		"scheduleBNumber" => "string",
		"scheduleBQuantity" => "integer",
		"scheduleBCode" => "ScheduleBCode",
		"manufacturerTariff" => "string",
		"preferenceCriterion" => "ItemPreferenceCriterion",
		"minimumQuantity" => "integer",
		"enforceMinQtyInternally" => "boolean",
		"softDescriptor" => "string",
		"shipPackage" => "RecordRef",
		"shipIndividually" => "boolean",
		"isFulfillable" => "boolean",
		"costCategory" => "RecordRef",
		"pricesIncludeTax" => "boolean",
		"quantityPricingSchedule" => "RecordRef",
		"useMarginalRates" => "boolean",
		"overallQuantityPricingType" => "ItemOverallQuantityPricingType",
		"pricingGroup" => "RecordRef",
		"minimumQuantityUnits" => "string",
		"vsoePrice" => "float",
		"vsoeSopGroup" => "VsoeSopGroup",
		"vsoeDeferral" => "VsoeDeferral",
		"vsoePermitDiscount" => "VsoePermitDiscount",
		"vsoeDelivered" => "boolean",
		"deferRevRec" => "boolean",
		"storeDisplayName" => "string",
		"storeDisplayThumbnail" => "RecordRef",
		"storeDisplayImage" => "RecordRef",
		"storeDescription" => "string",
		"storeDetailedDescription" => "string",
		"storeItemTemplate" => "RecordRef",
		"pageTitle" => "string",
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
		"featuredDescription" => "string",
		"shoppingDotComCategory" => "string",
		"shopzillaCategoryId" => "integer",
		"nexTagCategory" => "string",
		"productFeedList" => "ProductFeedList",
		"urlComponent" => "string",
		"customForm" => "RecordRef",
		"itemId" => "string",
		"upcCode" => "string",
		"displayName" => "string",
		"parent" => "RecordRef",
		"isOnline" => "boolean",
		"isGcoCompliant" => "boolean",
		"offerSupport" => "boolean",
		"isInactive" => "boolean",
		"availableToPartners" => "boolean",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"defaultItemShipMethod" => "RecordRef",
		"itemCarrier" => "ItemCarrier",
		"itemShipMethodList" => "RecordRefList",
		"subsidiaryList" => "RecordRefList",
		"itemOptionsList" => "ItemOptionsList",
		"matrixOptionList" => "MatrixOptionList",
		"pricingMatrix" => "PricingMatrix",
		"accountingBookDetailList" => "ItemAccountingBookDetailList",
		"purchaseTaxCode" => "RecordRef",
		"rate" => "float",
		"salesTaxCode" => "RecordRef",
		"siteCategoryList" => "SiteCategoryList",
		"translationsList" => "TranslationList",
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
