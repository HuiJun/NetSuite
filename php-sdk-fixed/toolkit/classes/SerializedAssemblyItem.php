<?php

class SerializedAssemblyItem extends Record {
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
	public $printItems;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isOnline;
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
	public $useComponentYield;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $subsidiaryList;
	/**
	 * @access public
	 * @var boolean
	 */
	public $availableToPartners;
	/**
	 * @access public
	 * @var boolean
	 */
	public $includeChildren;
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
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $cogsAccount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $incomeAccount;
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
	 * @var RecordRef
	 */
	public $salesTaxCode;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $costCategory;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $purchaseTaxCode;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $prodQtyVarianceAcct;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $prodPriceVarianceAcct;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $purchasePriceVarianceAcct;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $wipVarianceAcct;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxSchedule;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $scrapAcct;
	/**
	 * @access public
	 * @var float
	 */
	public $shippingCost;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $wipAcct;
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
	 * @var float
	 */
	public $weight;
	/**
	 * @access public
	 * @var string
	 */
	public $handlingCostUnits;
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
	 * @var ItemCostingMethod
	 */
	public $costingMethod;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isTaxable;
	/**
	 * @access public
	 * @var string
	 */
	public $costingMethodDisplay;
	/**
	 * @access public
	 * @var float
	 */
	public $rate;
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
	 * @var boolean
	 */
	public $trackLandedCost;
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
	public $manufactureraddr1;
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
	 * @var AssemblyItemEffectiveBomControl
	 */
	public $effectiveBomControl;
	/**
	 * @access public
	 * @var string
	 */
	public $minimumQuantityUnits;
	/**
	 * @access public
	 * @var string
	 */
	public $defaultRevision;
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
	 * @var RecordRef
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
	 * @var RecordRef
	 */
	public $issueProduct;
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
	 * @var RecordRef
	 */
	public $softDescriptor;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isSpecialWorkOrderItem;
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
	public $buildEntireAssembly;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityOnHand;
	/**
	 * @access public
	 * @var string
	 */
	public $quantityOnHandUnits;
	/**
	 * @access public
	 * @var boolean
	 */
	public $useMarginalRates;
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
	 * @var ItemCostEstimateType
	 */
	public $costEstimateType;
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
	public $unbuildVarianceAccount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $dropshipExpenseAccount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $preferredLocation;
	/**
	 * @access public
	 * @var float
	 */
	public $totalValue;
	/**
	 * @access public
	 * @var boolean
	 */
	public $useBins;
	/**
	 * @access public
	 * @var float
	 */
	public $averageCost;
	/**
	 * @access public
	 * @var float
	 */
	public $lastPurchasePrice;
	/**
	 * @access public
	 * @var string
	 */
	public $purchaseDescription;
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
	 * @var integer
	 */
	public $buildTime;
	/**
	 * @access public
	 * @var float
	 */
	public $safetyStockLevel;
	/**
	 * @access public
	 * @var string
	 */
	public $safetyStockLevelUnits;
	/**
	 * @access public
	 * @var integer
	 */
	public $safetyStockLevelDays;
	/**
	 * @access public
	 * @var boolean
	 */
	public $seasonalDemand;
	/**
	 * @access public
	 * @var string
	 */
	public $serialNumbers;
	/**
	 * @access public
	 * @var float
	 */
	public $reorderPoint;
	/**
	 * @access public
	 * @var string
	 */
	public $reorderPointUnits;
	/**
	 * @access public
	 * @var float
	 */
	public $preferredStockLevel;
	/**
	 * @access public
	 * @var string
	 */
	public $preferredStockLevelUnits;
	/**
	 * @access public
	 * @var float
	 */
	public $demandModifier;
	/**
	 * @access public
	 * @var boolean
	 */
	public $autoReorderPoint;
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
	 * @var RecordRef
	 */
	public $supplyLotSizingMethod;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $demandSource;
	/**
	 * @access public
	 * @var boolean
	 */
	public $shipIndividually;
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
	public $quantityBackOrdered;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityOnOrder;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $shipPackage;
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
	public $urlComponent;
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
	public $outOfStockMessage;
	/**
	 * @access public
	 * @var string
	 */
	public $nexTagCategory;
	/**
	 * @access public
	 * @var ItemOutOfStockBehavior
	 */
	public $outOfStockBehavior;
	/**
	 * @access public
	 * @var ProductFeedList
	 */
	public $productFeedList;
	/**
	 * @access public
	 * @var string
	 */
	public $relatedItemsDescription;
	/**
	 * @access public
	 * @var boolean
	 */
	public $onSpecial;
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
	 * @var ItemOptionsList
	 */
	public $itemOptionsList;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $itemNumberOptionsList;
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
	 * @var ItemMemberList
	 */
	public $memberList;
	/**
	 * @access public
	 * @var ItemAccountingBookDetailList
	 */
	public $accountingBookDetailList;
	/**
	 * @access public
	 * @var SerializedInventoryItemLocationsList
	 */
	public $locationsList;
	/**
	 * @access public
	 * @var SiteCategoryList
	 */
	public $siteCategoryList;
	/**
	 * @access public
	 * @var InventoryItemBinNumberList
	 */
	public $binNumberList;
	/**
	 * @access public
	 * @var SerializedInventoryItemNumbersList
	 */
	public $numbersList;
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
		"customForm" => "RecordRef",
		"itemId" => "string",
		"upcCode" => "string",
		"displayName" => "string",
		"vendorName" => "string",
		"parent" => "RecordRef",
		"printItems" => "boolean",
		"isOnline" => "boolean",
		"lastInvtCountDate" => "dateTime",
		"nextInvtCountDate" => "dateTime",
		"invtCountInterval" => "integer",
		"invtClassification" => "ItemInvtClassification",
		"isGcoCompliant" => "boolean",
		"offerSupport" => "boolean",
		"useComponentYield" => "boolean",
		"isInactive" => "boolean",
		"subsidiaryList" => "RecordRefList",
		"availableToPartners" => "boolean",
		"includeChildren" => "boolean",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"description" => "string",
		"cogsAccount" => "RecordRef",
		"incomeAccount" => "RecordRef",
		"assetAccount" => "RecordRef",
		"matchBillToReceipt" => "boolean",
		"billQtyVarianceAcct" => "RecordRef",
		"billPriceVarianceAcct" => "RecordRef",
		"billExchRateVarianceAcct" => "RecordRef",
		"gainLossAccount" => "RecordRef",
		"salesTaxCode" => "RecordRef",
		"costCategory" => "RecordRef",
		"purchaseTaxCode" => "RecordRef",
		"prodQtyVarianceAcct" => "RecordRef",
		"prodPriceVarianceAcct" => "RecordRef",
		"purchasePriceVarianceAcct" => "RecordRef",
		"wipVarianceAcct" => "RecordRef",
		"taxSchedule" => "RecordRef",
		"scrapAcct" => "RecordRef",
		"shippingCost" => "float",
		"wipAcct" => "RecordRef",
		"shippingCostUnits" => "string",
		"handlingCost" => "float",
		"weight" => "float",
		"handlingCostUnits" => "string",
		"weightUnit" => "ItemWeightUnit",
		"weightUnits" => "string",
		"costingMethod" => "ItemCostingMethod",
		"isTaxable" => "boolean",
		"costingMethodDisplay" => "string",
		"rate" => "float",
		"unitsType" => "RecordRef",
		"stockUnit" => "RecordRef",
		"purchaseUnit" => "RecordRef",
		"saleUnit" => "RecordRef",
		"trackLandedCost" => "boolean",
		"billingSchedule" => "RecordRef",
		"deferredRevenueAccount" => "RecordRef",
		"revRecSchedule" => "RecordRef",
		"stockDescription" => "string",
		"producer" => "boolean",
		"manufacturer" => "string",
		"mpn" => "string",
		"multManufactureAddr" => "boolean",
		"manufactureraddr1" => "string",
		"manufacturerCity" => "string",
		"manufacturerState" => "string",
		"manufacturerZip" => "string",
		"countryOfManufacture" => "Country",
		"effectiveBomControl" => "AssemblyItemEffectiveBomControl",
		"minimumQuantityUnits" => "string",
		"defaultRevision" => "string",
		"defaultItemShipMethod" => "RecordRef",
		"itemCarrier" => "ItemCarrier",
		"roundUpAsComponent" => "boolean",
		"purchaseOrderQuantity" => "float",
		"purchaseOrderAmount" => "float",
		"purchaseOrderQuantityDiff" => "float",
		"receiptQuantity" => "float",
		"receiptAmount" => "float",
		"receiptQuantityDiff" => "float",
		"itemShipMethodList" => "RecordRefList",
		"manufacturerTaxId" => "string",
		"scheduleBNumber" => "string",
		"scheduleBQuantity" => "integer",
		"scheduleBCode" => "RecordRef",
		"manufacturerTariff" => "string",
		"preferenceCriterion" => "ItemPreferenceCriterion",
		"issueProduct" => "RecordRef",
		"minimumQuantity" => "integer",
		"enforceMinQtyInternally" => "boolean",
		"softDescriptor" => "RecordRef",
		"isSpecialWorkOrderItem" => "boolean",
		"pricesIncludeTax" => "boolean",
		"quantityPricingSchedule" => "RecordRef",
		"buildEntireAssembly" => "boolean",
		"quantityOnHand" => "float",
		"quantityOnHandUnits" => "string",
		"useMarginalRates" => "boolean",
		"reorderMultiple" => "integer",
		"cost" => "float",
		"costEstimateType" => "ItemCostEstimateType",
		"isHazmatItem" => "boolean",
		"hazmatId" => "string",
		"hazmatShippingName" => "string",
		"hazmatHazardClass" => "string",
		"hazmatPackingGroup" => "HazmatPackingGroup",
		"hazmatItemUnits" => "string",
		"hazmatItemUnitsQty" => "float",
		"costEstimate" => "float",
		"transferPrice" => "float",
		"overallQuantityPricingType" => "ItemOverallQuantityPricingType",
		"pricingGroup" => "RecordRef",
		"vsoePrice" => "float",
		"vsoeSopGroup" => "VsoeSopGroup",
		"vsoeDeferral" => "VsoeDeferral",
		"vsoePermitDiscount" => "VsoePermitDiscount",
		"vsoeDelivered" => "boolean",
		"unbuildVarianceAccount" => "RecordRef",
		"dropshipExpenseAccount" => "RecordRef",
		"preferredLocation" => "RecordRef",
		"totalValue" => "float",
		"useBins" => "boolean",
		"averageCost" => "float",
		"lastPurchasePrice" => "float",
		"purchaseDescription" => "string",
		"leadTime" => "integer",
		"autoLeadTime" => "boolean",
		"buildTime" => "integer",
		"safetyStockLevel" => "float",
		"safetyStockLevelUnits" => "string",
		"safetyStockLevelDays" => "integer",
		"seasonalDemand" => "boolean",
		"serialNumbers" => "string",
		"reorderPoint" => "float",
		"reorderPointUnits" => "string",
		"preferredStockLevel" => "float",
		"preferredStockLevelUnits" => "string",
		"demandModifier" => "float",
		"autoReorderPoint" => "boolean",
		"autoPreferredStockLevel" => "boolean",
		"preferredStockLevelDays" => "float",
		"defaultReturnCost" => "float",
		"supplyReplenishmentMethod" => "RecordRef",
		"alternateDemandSourceItem" => "RecordRef",
		"fixedLotSize" => "float",
		"supplyType" => "RecordRef",
		"demandTimeFence" => "integer",
		"supplyTimeFence" => "integer",
		"rescheduleInDays" => "integer",
		"rescheduleOutDays" => "integer",
		"supplyLotSizingMethod" => "RecordRef",
		"demandSource" => "RecordRef",
		"shipIndividually" => "boolean",
		"quantityCommitted" => "float",
		"quantityAvailable" => "float",
		"quantityBackOrdered" => "float",
		"quantityOnOrder" => "float",
		"shipPackage" => "RecordRef",
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
		"urlComponent" => "string",
		"searchKeywords" => "string",
		"isDonationItem" => "boolean",
		"showDefaultDonationAmount" => "boolean",
		"maxDonationAmount" => "float",
		"dontShowPrice" => "boolean",
		"noPriceMessage" => "string",
		"shoppingDotComCategory" => "string",
		"shopzillaCategoryId" => "integer",
		"outOfStockMessage" => "string",
		"nexTagCategory" => "string",
		"outOfStockBehavior" => "ItemOutOfStockBehavior",
		"productFeedList" => "ProductFeedList",
		"relatedItemsDescription" => "string",
		"onSpecial" => "boolean",
		"specialsDescription" => "string",
		"featuredDescription" => "string",
		"itemOptionsList" => "ItemOptionsList",
		"itemNumberOptionsList" => "RecordRefList",
		"itemVendorList" => "ItemVendorList",
		"pricingMatrix" => "PricingMatrix",
		"memberList" => "ItemMemberList",
		"accountingBookDetailList" => "ItemAccountingBookDetailList",
		"locationsList" => "SerializedInventoryItemLocationsList",
		"siteCategoryList" => "SiteCategoryList",
		"binNumberList" => "InventoryItemBinNumberList",
		"numbersList" => "SerializedInventoryItemNumbersList",
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
