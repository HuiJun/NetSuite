<?php

class InventoryItem extends Record {
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
	public $copyDescription;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $expenseAccount;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $dateConvertedToInv;
	/**
	 * @access public
	 * @var ItemType
	 */
	public $originalItemType;
	/**
	 * @access public
	 * @var ItemSubType
	 */
	public $originalItemSubtype;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $cogsAccount;
	/**
	 * @access public
	 * @var string
	 */
	public $salesDescription;
	/**
	 * @access public
	 * @var InventoryItemFraudRisk
	 */
	public $fraudRisk;
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
	 * @var RecordRef
	 */
	public $dropshipExpenseAccount;
	/**
	 * @access public
	 * @var boolean
	 */
	public $deferRevRec;
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
	public $assetAccount;
	/**
	 * @access public
	 * @var boolean
	 */
	public $matchBillToReceipt;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $billQtyVarianceAcct;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $billPriceVarianceAcct;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $billExchRateVarianceAcct;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $gainLossAccount;
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
	public $costingMethodDisplay;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $unitsType;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $stockUnit;
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
	 * @var boolean
	 */
	public $trackLandedCost;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isDropShipItem;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isSpecialOrderItem;
	/**
	 * @access public
	 * @var string
	 */
	public $stockDescription;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $deferredRevenueAccount;
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
	 * @var RecordRef
	 */
	public $revRecSchedule;
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
	 * @var boolean
	 */
	public $roundUpAsComponent;
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
	public $minimumQuantityUnits;
	/**
	 * @access public
	 * @var RecordRef
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
	public $purchasePriceVarianceAcct;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $quantityPricingSchedule;
	/**
	 * @access public
	 * @var string
	 */
	public $reorderPointUnits;
	/**
	 * @access public
	 * @var boolean
	 */
	public $useMarginalRates;
	/**
	 * @access public
	 * @var string
	 */
	public $preferredStockLevelUnits;
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
	public $transferPrice;
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
	 * @var string
	 */
	public $costEstimateUnits;
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
	 * @var RecordRef
	 */
	public $preferredLocation;
	/**
	 * @access public
	 * @var integer
	 */
	public $reorderMultiple;
	/**
	 * @access public
	 * @var float
	 */
	public $cost;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastInvtCountDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $nextInvtCountDate;
	/**
	 * @access public
	 * @var integer
	 */
	public $invtCountInterval;
	/**
	 * @access public
	 * @var ItemInvtClassification
	 */
	public $invtClassification;
	/**
	 * @access public
	 * @var string
	 */
	public $costUnits;
	/**
	 * @access public
	 * @var float
	 */
	public $totalValue;
	/**
	 * @access public
	 * @var float
	 */
	public $averageCost;
	/**
	 * @access public
	 * @var boolean
	 */
	public $useBins;
	/**
	 * @access public
	 * @var string
	 */
	public $quantityReorderUnits;
	/**
	 * @access public
	 * @var integer
	 */
	public $leadTime;
	/**
	 * @access public
	 * @var boolean
	 */
	public $autoLeadTime;
	/**
	 * @access public
	 * @var float
	 */
	public $lastPurchasePrice;
	/**
	 * @access public
	 * @var boolean
	 */
	public $autoPreferredStockLevel;
	/**
	 * @access public
	 * @var float
	 */
	public $preferredStockLevelDays;
	/**
	 * @access public
	 * @var float
	 */
	public $safetyStockLevel;
	/**
	 * @access public
	 * @var integer
	 */
	public $safetyStockLevelDays;
	/**
	 * @access public
	 * @var integer
	 */
	public $backwardConsumptionDays;
	/**
	 * @access public
	 * @var boolean
	 */
	public $seasonalDemand;
	/**
	 * @access public
	 * @var string
	 */
	public $safetyStockLevelUnits;
	/**
	 * @access public
	 * @var float
	 */
	public $demandModifier;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $distributionNetwork;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $distributionCategory;
	/**
	 * @access public
	 * @var boolean
	 */
	public $autoReorderPoint;
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
	 * @var ItemCostingMethod
	 */
	public $costingMethod;
	/**
	 * @access public
	 * @var string
	 */
	public $currency;
	/**
	 * @access public
	 * @var float
	 */
	public $preferredStockLevel;
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
	public $defaultReturnCost;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $supplyReplenishmentMethod;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $alternateDemandSourceItem;
	/**
	 * @access public
	 * @var float
	 */
	public $fixedLotSize;
	/**
	 * @access public
	 * @var PeriodicLotSizeType
	 */
	public $periodicLotSizeType;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $supplyType;
	/**
	 * @access public
	 * @var integer
	 */
	public $demandTimeFence;
	/**
	 * @access public
	 * @var integer
	 */
	public $supplyTimeFence;
	/**
	 * @access public
	 * @var integer
	 */
	public $rescheduleInDays;
	/**
	 * @access public
	 * @var integer
	 */
	public $rescheduleOutDays;
	/**
	 * @access public
	 * @var integer
	 */
	public $periodicLotSizeDays;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $supplyLotSizingMethod;
	/**
	 * @access public
	 * @var integer
	 */
	public $forwardConsumptionDays;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $demandSource;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityBackOrdered;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityCommitted;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityAvailable;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityOnHand;
	/**
	 * @access public
	 * @var float
	 */
	public $onHandValueMli;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityOnOrder;
	/**
	 * @access public
	 * @var float
	 */
	public $rate;
	/**
	 * @access public
	 * @var float
	 */
	public $reorderPoint;
	/**
	 * @access public
	 * @var string
	 */
	public $quantityCommittedUnits;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $salesTaxCode;
	/**
	 * @access public
	 * @var string
	 */
	public $quantityAvailableUnits;
	/**
	 * @access public
	 * @var string
	 */
	public $quantityOnHandUnits;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $vendor;
	/**
	 * @access public
	 * @var string
	 */
	public $quantityOnOrderUnits;
	/**
	 * @access public
	 * @var ProductFeedList
	 */
	public $productFeedList;
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
	 * @var ItemVendorList
	 */
	public $itemVendorList;
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
	 * @var InventoryItemBinNumberList
	 */
	public $binNumberList;
	/**
	 * @access public
	 * @var InventoryItemLocationsList
	 */
	public $locationsList;
	/**
	 * @access public
	 * @var MatrixOptionList
	 */
	public $matrixOptionList;
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
		"copyDescription" => "boolean",
		"expenseAccount" => "RecordRef",
		"dateConvertedToInv" => "dateTime",
		"originalItemType" => "ItemType",
		"originalItemSubtype" => "ItemSubType",
		"cogsAccount" => "RecordRef",
		"salesDescription" => "string",
		"fraudRisk" => "InventoryItemFraudRisk",
		"includeChildren" => "boolean",
		"incomeAccount" => "RecordRef",
		"taxSchedule" => "RecordRef",
		"dropshipExpenseAccount" => "RecordRef",
		"deferRevRec" => "boolean",
		"isTaxable" => "boolean",
		"matrixType" => "ItemMatrixType",
		"assetAccount" => "RecordRef",
		"matchBillToReceipt" => "boolean",
		"billQtyVarianceAcct" => "RecordRef",
		"billPriceVarianceAcct" => "RecordRef",
		"billExchRateVarianceAcct" => "RecordRef",
		"gainLossAccount" => "RecordRef",
		"shippingCost" => "float",
		"shippingCostUnits" => "string",
		"handlingCost" => "float",
		"handlingCostUnits" => "string",
		"weight" => "float",
		"weightUnit" => "ItemWeightUnit",
		"weightUnits" => "string",
		"costingMethodDisplay" => "string",
		"unitsType" => "RecordRef",
		"stockUnit" => "RecordRef",
		"purchaseUnit" => "RecordRef",
		"saleUnit" => "RecordRef",
		"issueProduct" => "RecordRef",
		"billingSchedule" => "RecordRef",
		"trackLandedCost" => "boolean",
		"isDropShipItem" => "boolean",
		"isSpecialOrderItem" => "boolean",
		"stockDescription" => "string",
		"deferredRevenueAccount" => "RecordRef",
		"producer" => "boolean",
		"manufacturer" => "string",
		"revRecSchedule" => "RecordRef",
		"mpn" => "string",
		"multManufactureAddr" => "boolean",
		"manufacturerAddr1" => "string",
		"manufacturerCity" => "string",
		"manufacturerState" => "string",
		"manufacturerZip" => "string",
		"countryOfManufacture" => "Country",
		"roundUpAsComponent" => "boolean",
		"purchaseOrderQuantity" => "float",
		"purchaseOrderAmount" => "float",
		"purchaseOrderQuantityDiff" => "float",
		"receiptQuantity" => "float",
		"receiptAmount" => "float",
		"receiptQuantityDiff" => "float",
		"defaultItemShipMethod" => "RecordRef",
		"itemCarrier" => "ItemCarrier",
		"itemShipMethodList" => "RecordRefList",
		"manufacturerTaxId" => "string",
		"scheduleBNumber" => "string",
		"scheduleBQuantity" => "integer",
		"scheduleBCode" => "ScheduleBCode",
		"manufacturerTariff" => "string",
		"preferenceCriterion" => "ItemPreferenceCriterion",
		"minimumQuantity" => "integer",
		"enforceMinQtyInternally" => "boolean",
		"minimumQuantityUnits" => "string",
		"softDescriptor" => "RecordRef",
		"shipPackage" => "RecordRef",
		"shipIndividually" => "boolean",
		"costCategory" => "RecordRef",
		"pricesIncludeTax" => "boolean",
		"purchasePriceVarianceAcct" => "RecordRef",
		"quantityPricingSchedule" => "RecordRef",
		"reorderPointUnits" => "string",
		"useMarginalRates" => "boolean",
		"preferredStockLevelUnits" => "string",
		"costEstimateType" => "ItemCostEstimateType",
		"costEstimate" => "float",
		"transferPrice" => "float",
		"overallQuantityPricingType" => "ItemOverallQuantityPricingType",
		"pricingGroup" => "RecordRef",
		"vsoePrice" => "float",
		"vsoeSopGroup" => "VsoeSopGroup",
		"costEstimateUnits" => "string",
		"vsoeDeferral" => "VsoeDeferral",
		"vsoePermitDiscount" => "VsoePermitDiscount",
		"vsoeDelivered" => "boolean",
		"preferredLocation" => "RecordRef",
		"reorderMultiple" => "integer",
		"cost" => "float",
		"lastInvtCountDate" => "dateTime",
		"nextInvtCountDate" => "dateTime",
		"invtCountInterval" => "integer",
		"invtClassification" => "ItemInvtClassification",
		"costUnits" => "string",
		"totalValue" => "float",
		"averageCost" => "float",
		"useBins" => "boolean",
		"quantityReorderUnits" => "string",
		"leadTime" => "integer",
		"autoLeadTime" => "boolean",
		"lastPurchasePrice" => "float",
		"autoPreferredStockLevel" => "boolean",
		"preferredStockLevelDays" => "float",
		"safetyStockLevel" => "float",
		"safetyStockLevelDays" => "integer",
		"backwardConsumptionDays" => "integer",
		"seasonalDemand" => "boolean",
		"safetyStockLevelUnits" => "string",
		"demandModifier" => "float",
		"distributionNetwork" => "RecordRef",
		"distributionCategory" => "RecordRef",
		"autoReorderPoint" => "boolean",
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
		"urlComponent" => "string",
		"customForm" => "RecordRef",
		"itemId" => "string",
		"upcCode" => "string",
		"displayName" => "string",
		"vendorName" => "string",
		"parent" => "RecordRef",
		"isOnline" => "boolean",
		"isHazmatItem" => "boolean",
		"hazmatId" => "string",
		"hazmatShippingName" => "string",
		"hazmatHazardClass" => "string",
		"hazmatPackingGroup" => "HazmatPackingGroup",
		"hazmatItemUnits" => "string",
		"hazmatItemUnitsQty" => "float",
		"isGcoCompliant" => "boolean",
		"offerSupport" => "boolean",
		"isInactive" => "boolean",
		"availableToPartners" => "boolean",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"costingMethod" => "ItemCostingMethod",
		"currency" => "string",
		"preferredStockLevel" => "float",
		"pricingMatrix" => "PricingMatrix",
		"accountingBookDetailList" => "ItemAccountingBookDetailList",
		"purchaseTaxCode" => "RecordRef",
		"defaultReturnCost" => "float",
		"supplyReplenishmentMethod" => "RecordRef",
		"alternateDemandSourceItem" => "RecordRef",
		"fixedLotSize" => "float",
		"periodicLotSizeType" => "PeriodicLotSizeType",
		"supplyType" => "RecordRef",
		"demandTimeFence" => "integer",
		"supplyTimeFence" => "integer",
		"rescheduleInDays" => "integer",
		"rescheduleOutDays" => "integer",
		"periodicLotSizeDays" => "integer",
		"supplyLotSizingMethod" => "RecordRef",
		"forwardConsumptionDays" => "integer",
		"demandSource" => "RecordRef",
		"quantityBackOrdered" => "float",
		"quantityCommitted" => "float",
		"quantityAvailable" => "float",
		"quantityOnHand" => "float",
		"onHandValueMli" => "float",
		"quantityOnOrder" => "float",
		"rate" => "float",
		"reorderPoint" => "float",
		"quantityCommittedUnits" => "string",
		"salesTaxCode" => "RecordRef",
		"quantityAvailableUnits" => "string",
		"quantityOnHandUnits" => "string",
		"vendor" => "RecordRef",
		"quantityOnOrderUnits" => "string",
		"productFeedList" => "ProductFeedList",
		"subsidiaryList" => "RecordRefList",
		"itemOptionsList" => "ItemOptionsList",
		"itemVendorList" => "ItemVendorList",
		"siteCategoryList" => "SiteCategoryList",
		"translationsList" => "TranslationList",
		"binNumberList" => "InventoryItemBinNumberList",
		"locationsList" => "InventoryItemLocationsList",
		"matrixOptionList" => "MatrixOptionList",
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
