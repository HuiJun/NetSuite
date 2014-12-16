<?php

class ItemSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $account;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $accountingBook;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $accountingBookAmortization;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $accountingBookRevRecSchedule;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $allowedShippingMethod;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $alternateDemandSourceItem;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $atpLeadTime;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $atpMethod;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $autoLeadTime;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $autoPreferredStockLevel;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $autoReorderPoint;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $availableToPartners;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $averageCost;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $backwardConsumptionDays;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $binNumber;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $binOnHandAvail;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $binOnHandCount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $bomQuantity;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $buildEntireAssembly;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $buildTime;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $buyItNowPrice;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $caption;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $category;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $class;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $component;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $componentOf;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $componentYield;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $copyDescription;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $correlatedItem;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $correlatedItemCorrelation;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $correlatedItemCount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $correlatedItemLift;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $correlatedItemPurchaseRate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $cost;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $costAccountingStatus;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $costCategory;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $costEstimate;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $costEstimateType;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $costingMethod;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $countryOfManufacture;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $created;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $createJob;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $dateViewed;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $daysBeforeExpiration;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $defaultReturnCost;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $defaultShippingMethod;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $deferRevRec;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $demandModifier;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $demandSource;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $demandTimeFence;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $department;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $displayIneBayStore;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $displayName;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $distributionCategory;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $distributionNetwork;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $dontShowPrice;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $eBayItemDescription;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $eBayItemSubtitle;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $eBayItemTitle;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $ebayRelistingOption;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $effectiveBomControl;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $effectiveDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $effectiveRevision;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $endAuctionsWhenOutOfStock;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $excludeFromSitemap;
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
	public $featuredDescription;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $feedDescription;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $feedName;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fixedLotSize;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $forwardConsumptionDays;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $fraudRisk;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $froogleProductFeed;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxCost;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $giftCertAuthCode;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $giftCertEmail;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $giftCertExpDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $giftCertFrom;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $giftCertMsg;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $giftCertOrigAmt;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $giftCertRecipient;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $imageUrl;
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
	 * @var SearchMultiSelectField
	 */
	public $inventoryLocation;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $invtClassification;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $invtCountInterval;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isAvailable;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isDropShipItem;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isFulfillable;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isGcoCompliant;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isLotItem;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isOnline;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isPreferredVendor;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isSerialItem;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isSpecialOrderItem;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isSpecialWorkOrderItem;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $issueProduct;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isTaxable;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isVsoeBundle;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isWip;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $itemId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $itemUrl;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastInvtCountDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $lastPurchasePrice;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastQuantityAvailableChange;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $leadTime;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $listingDuration;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $locationAtpLeadTime;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $locationAverageCost;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $locationBuildTime;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $locationCost;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $locationCostAccountingStatus;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $locationDefaultReturnCost;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $locationDemandSource;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $locationDemandTimeFence;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $locationFixedLotSize;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $locationInventoryCostTemplate;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $locationInvtClassification;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $locationInvtCountInterval;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $locationLastInvtCountDate;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $locationLeadTime;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $locationNextInvtCountDate;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $locationPeriodicLotSizeDays;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $locationPeriodicLotSizeType;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $locationPreferredStockLevel;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $locationQuantityAvailable;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $locationQuantityBackOrdered;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $locationQuantityCommitted;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $locationQuantityInTransit;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $locationQuantityOnHand;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $locationQuantityOnOrder;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $locationReorderPoint;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $locationRescheduleInDays;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $locationRescheduleOutDays;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $locationSafetyStockLevel;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $locationSupplyLotSizingMethod;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $locationSupplyTimeFence;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $locationSupplyType;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $locationTotalValue;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $locBackwardConsumptionDays;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $locForwardConsumptionDays;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $manufacturer;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $manufactureraddr1;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $manufacturerCity;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $manufacturerState;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $manufacturerTariff;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $manufacturerTaxId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $manufacturerZip;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $manufacturingChargeItem;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $matchBillToReceipt;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $matrix;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $matrixChild;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $metaTagHtml;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $minimumQuantity;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $mpn;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $multManufactureAddr;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $nexTagCategory;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $nexTagProductFeed;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $nextInvtCountDate;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $numActiveListings;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $numberAllowedDownloads;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $numCurrentlyListed;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $obsoleteDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $obsoleteRevision;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $offerSupport;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $onlineCustomerPrice;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $onSpecial;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $otherVendor;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $outOfStockBehavior;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $overallQuantityPricingType;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $overheadType;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $pageTitle;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $parent;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $periodicLotSizeDays;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $periodicLotSizeType;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $preferenceCriterion;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $preferredBin;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $preferredLocation;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $preferredStockLevel;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $preferredStockLevelDays;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $price;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $pricesIncludeTax;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $pricingGroup;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $primaryCategory;
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
	 * @var SearchMultiSelectField
	 */
	public $purchaseUnit;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityAvailable;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityBackOrdered;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityCommitted;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityOnHand;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityOnOrder;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $quantityPricingSchedule;
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
	 * @var SearchLongField
	 */
	public $reorderMultiple;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $reorderPoint;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $rescheduleInDays;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $rescheduleOutDays;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $reservePrice;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $revRecSchedule;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $roundUpAsComponent;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $safetyStockLevel;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $safetyStockLevelDays;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $salesDescription;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $saleUnit;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $sameAsPrimaryBookAmortization;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $sameAsPrimaryBookRevRec;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $scheduleBCode;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $scheduleBNumber;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $scheduleBQuantity;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $searchKeywords;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $seasonalDemand;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $sellOnEBay;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $serialNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $serialNumberLocation;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $shipIndividually;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $shipPackage;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $shippingCarrier;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $shippingRate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $shoppingDotComCategory;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $shoppingProductFeed;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $shopzillaCategoryId;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $shopzillaProductFeed;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $sitemapPriority;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $softDescriptor;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $startingPrice;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $stockDescription;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $stockUnit;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $storeDescription;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $subType;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $supplyLotSizingMethod;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $supplyReplenishmentMethod;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $supplyTimeFence;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $supplyType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $taxCode;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $taxSchedule;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $thumbnailUrl;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $totalValue;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $trackLandedCost;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $transferPrice;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $type;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $unitsType;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $upcCode;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $urlComponent;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $useBins;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $useComponentYield;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $useMarginalRates;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $vendor;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $vendorCode;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $vendorCost;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $vendorCostEntered;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $vendorName;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $vendorPriceCurrency;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $vsoeDeferral;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $vsoeDelivered;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $vsoePermitDiscount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $vsoePrice;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $webSite;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $weight;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $yahooProductFeed;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"account" => "SearchMultiSelectField",
		"accountingBook" => "SearchMultiSelectField",
		"accountingBookAmortization" => "SearchMultiSelectField",
		"accountingBookRevRecSchedule" => "SearchMultiSelectField",
		"allowedShippingMethod" => "SearchMultiSelectField",
		"alternateDemandSourceItem" => "SearchMultiSelectField",
		"atpLeadTime" => "SearchDoubleField",
		"atpMethod" => "SearchEnumMultiSelectField",
		"autoLeadTime" => "SearchBooleanField",
		"autoPreferredStockLevel" => "SearchBooleanField",
		"autoReorderPoint" => "SearchBooleanField",
		"availableToPartners" => "SearchBooleanField",
		"averageCost" => "SearchDoubleField",
		"backwardConsumptionDays" => "SearchLongField",
		"binNumber" => "SearchStringField",
		"binOnHandAvail" => "SearchDoubleField",
		"binOnHandCount" => "SearchDoubleField",
		"bomQuantity" => "SearchDoubleField",
		"buildEntireAssembly" => "SearchBooleanField",
		"buildTime" => "SearchDoubleField",
		"buyItNowPrice" => "SearchDoubleField",
		"caption" => "SearchStringField",
		"category" => "SearchMultiSelectField",
		"class" => "SearchMultiSelectField",
		"component" => "SearchMultiSelectField",
		"componentOf" => "SearchMultiSelectField",
		"componentYield" => "SearchDoubleField",
		"copyDescription" => "SearchBooleanField",
		"correlatedItem" => "SearchMultiSelectField",
		"correlatedItemCorrelation" => "SearchDoubleField",
		"correlatedItemCount" => "SearchLongField",
		"correlatedItemLift" => "SearchDoubleField",
		"correlatedItemPurchaseRate" => "SearchDoubleField",
		"cost" => "SearchDoubleField",
		"costAccountingStatus" => "SearchEnumMultiSelectField",
		"costCategory" => "SearchMultiSelectField",
		"costEstimate" => "SearchDoubleField",
		"costEstimateType" => "SearchEnumMultiSelectField",
		"costingMethod" => "SearchEnumMultiSelectField",
		"countryOfManufacture" => "SearchEnumMultiSelectField",
		"created" => "SearchDateField",
		"createJob" => "SearchBooleanField",
		"dateViewed" => "SearchDateField",
		"daysBeforeExpiration" => "SearchDoubleField",
		"defaultReturnCost" => "SearchDoubleField",
		"defaultShippingMethod" => "SearchMultiSelectField",
		"deferRevRec" => "SearchBooleanField",
		"demandModifier" => "SearchDoubleField",
		"demandSource" => "SearchEnumMultiSelectField",
		"demandTimeFence" => "SearchLongField",
		"department" => "SearchMultiSelectField",
		"displayIneBayStore" => "SearchBooleanField",
		"displayName" => "SearchStringField",
		"distributionCategory" => "SearchMultiSelectField",
		"distributionNetwork" => "SearchMultiSelectField",
		"dontShowPrice" => "SearchBooleanField",
		"eBayItemDescription" => "SearchStringField",
		"eBayItemSubtitle" => "SearchStringField",
		"eBayItemTitle" => "SearchStringField",
		"ebayRelistingOption" => "SearchEnumMultiSelectField",
		"effectiveBomControl" => "SearchEnumMultiSelectField",
		"effectiveDate" => "SearchDateField",
		"effectiveRevision" => "SearchMultiSelectField",
		"endAuctionsWhenOutOfStock" => "SearchBooleanField",
		"excludeFromSitemap" => "SearchBooleanField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"featuredDescription" => "SearchStringField",
		"feedDescription" => "SearchStringField",
		"feedName" => "SearchStringField",
		"fixedLotSize" => "SearchDoubleField",
		"forwardConsumptionDays" => "SearchLongField",
		"fraudRisk" => "SearchEnumMultiSelectField",
		"froogleProductFeed" => "SearchBooleanField",
		"fxCost" => "SearchDoubleField",
		"giftCertAuthCode" => "SearchStringField",
		"giftCertEmail" => "SearchStringField",
		"giftCertExpDate" => "SearchDateField",
		"giftCertFrom" => "SearchStringField",
		"giftCertMsg" => "SearchStringField",
		"giftCertOrigAmt" => "SearchStringField",
		"giftCertRecipient" => "SearchStringField",
		"imageUrl" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"inventoryLocation" => "SearchMultiSelectField",
		"invtClassification" => "SearchEnumMultiSelectField",
		"invtCountInterval" => "SearchLongField",
		"isAvailable" => "SearchBooleanField",
		"isDropShipItem" => "SearchBooleanField",
		"isFulfillable" => "SearchBooleanField",
		"isGcoCompliant" => "SearchBooleanField",
		"isInactive" => "SearchBooleanField",
		"isLotItem" => "SearchBooleanField",
		"isOnline" => "SearchBooleanField",
		"isPreferredVendor" => "SearchBooleanField",
		"isSerialItem" => "SearchBooleanField",
		"isSpecialOrderItem" => "SearchBooleanField",
		"isSpecialWorkOrderItem" => "SearchBooleanField",
		"issueProduct" => "SearchMultiSelectField",
		"isTaxable" => "SearchBooleanField",
		"isVsoeBundle" => "SearchBooleanField",
		"isWip" => "SearchBooleanField",
		"itemId" => "SearchStringField",
		"itemUrl" => "SearchStringField",
		"lastInvtCountDate" => "SearchDateField",
		"lastModifiedDate" => "SearchDateField",
		"lastPurchasePrice" => "SearchDoubleField",
		"lastQuantityAvailableChange" => "SearchDateField",
		"leadTime" => "SearchLongField",
		"listingDuration" => "SearchEnumMultiSelectField",
		"location" => "SearchMultiSelectField",
		"locationAtpLeadTime" => "SearchDoubleField",
		"locationAverageCost" => "SearchDoubleField",
		"locationBuildTime" => "SearchDoubleField",
		"locationCost" => "SearchDoubleField",
		"locationCostAccountingStatus" => "SearchEnumMultiSelectField",
		"locationDefaultReturnCost" => "SearchDoubleField",
		"locationDemandSource" => "SearchEnumMultiSelectField",
		"locationDemandTimeFence" => "SearchLongField",
		"locationFixedLotSize" => "SearchDoubleField",
		"locationInventoryCostTemplate" => "SearchMultiSelectField",
		"locationInvtClassification" => "SearchEnumMultiSelectField",
		"locationInvtCountInterval" => "SearchLongField",
		"locationLastInvtCountDate" => "SearchDateField",
		"locationLeadTime" => "SearchLongField",
		"locationNextInvtCountDate" => "SearchDateField",
		"locationPeriodicLotSizeDays" => "SearchLongField",
		"locationPeriodicLotSizeType" => "SearchEnumMultiSelectField",
		"locationPreferredStockLevel" => "SearchDoubleField",
		"locationQuantityAvailable" => "SearchDoubleField",
		"locationQuantityBackOrdered" => "SearchDoubleField",
		"locationQuantityCommitted" => "SearchDoubleField",
		"locationQuantityInTransit" => "SearchDoubleField",
		"locationQuantityOnHand" => "SearchDoubleField",
		"locationQuantityOnOrder" => "SearchDoubleField",
		"locationReorderPoint" => "SearchDoubleField",
		"locationRescheduleInDays" => "SearchLongField",
		"locationRescheduleOutDays" => "SearchLongField",
		"locationSafetyStockLevel" => "SearchDoubleField",
		"locationSupplyLotSizingMethod" => "SearchEnumMultiSelectField",
		"locationSupplyTimeFence" => "SearchLongField",
		"locationSupplyType" => "SearchEnumMultiSelectField",
		"locationTotalValue" => "SearchDoubleField",
		"locBackwardConsumptionDays" => "SearchLongField",
		"locForwardConsumptionDays" => "SearchLongField",
		"manufacturer" => "SearchStringField",
		"manufactureraddr1" => "SearchStringField",
		"manufacturerCity" => "SearchStringField",
		"manufacturerState" => "SearchStringField",
		"manufacturerTariff" => "SearchStringField",
		"manufacturerTaxId" => "SearchStringField",
		"manufacturerZip" => "SearchStringField",
		"manufacturingChargeItem" => "SearchBooleanField",
		"matchBillToReceipt" => "SearchBooleanField",
		"matrix" => "SearchBooleanField",
		"matrixChild" => "SearchBooleanField",
		"metaTagHtml" => "SearchStringField",
		"minimumQuantity" => "SearchLongField",
		"mpn" => "SearchStringField",
		"multManufactureAddr" => "SearchBooleanField",
		"nexTagCategory" => "SearchStringField",
		"nexTagProductFeed" => "SearchBooleanField",
		"nextInvtCountDate" => "SearchDateField",
		"numActiveListings" => "SearchLongField",
		"numberAllowedDownloads" => "SearchDoubleField",
		"numCurrentlyListed" => "SearchLongField",
		"obsoleteDate" => "SearchDateField",
		"obsoleteRevision" => "SearchMultiSelectField",
		"offerSupport" => "SearchBooleanField",
		"onlineCustomerPrice" => "SearchDoubleField",
		"onSpecial" => "SearchBooleanField",
		"otherVendor" => "SearchMultiSelectField",
		"outOfStockBehavior" => "SearchMultiSelectField",
		"overallQuantityPricingType" => "SearchEnumMultiSelectField",
		"overheadType" => "SearchEnumMultiSelectField",
		"pageTitle" => "SearchStringField",
		"parent" => "SearchMultiSelectField",
		"periodicLotSizeDays" => "SearchLongField",
		"periodicLotSizeType" => "SearchEnumMultiSelectField",
		"preferenceCriterion" => "SearchStringField",
		"preferredBin" => "SearchBooleanField",
		"preferredLocation" => "SearchMultiSelectField",
		"preferredStockLevel" => "SearchDoubleField",
		"preferredStockLevelDays" => "SearchLongField",
		"price" => "SearchDoubleField",
		"pricesIncludeTax" => "SearchBooleanField",
		"pricingGroup" => "SearchMultiSelectField",
		"primaryCategory" => "SearchLongField",
		"purchaseOrderAmount" => "SearchDoubleField",
		"purchaseOrderQuantity" => "SearchDoubleField",
		"purchaseOrderQuantityDiff" => "SearchDoubleField",
		"purchaseUnit" => "SearchMultiSelectField",
		"quantityAvailable" => "SearchDoubleField",
		"quantityBackOrdered" => "SearchDoubleField",
		"quantityCommitted" => "SearchDoubleField",
		"quantityOnHand" => "SearchDoubleField",
		"quantityOnOrder" => "SearchDoubleField",
		"quantityPricingSchedule" => "SearchMultiSelectField",
		"receiptAmount" => "SearchDoubleField",
		"receiptQuantity" => "SearchDoubleField",
		"receiptQuantityDiff" => "SearchDoubleField",
		"reorderMultiple" => "SearchLongField",
		"reorderPoint" => "SearchDoubleField",
		"rescheduleInDays" => "SearchLongField",
		"rescheduleOutDays" => "SearchLongField",
		"reservePrice" => "SearchDoubleField",
		"revRecSchedule" => "SearchMultiSelectField",
		"roundUpAsComponent" => "SearchBooleanField",
		"safetyStockLevel" => "SearchDoubleField",
		"safetyStockLevelDays" => "SearchLongField",
		"salesDescription" => "SearchStringField",
		"saleUnit" => "SearchMultiSelectField",
		"sameAsPrimaryBookAmortization" => "SearchBooleanField",
		"sameAsPrimaryBookRevRec" => "SearchBooleanField",
		"scheduleBCode" => "SearchEnumMultiSelectField",
		"scheduleBNumber" => "SearchStringField",
		"scheduleBQuantity" => "SearchStringField",
		"searchKeywords" => "SearchStringField",
		"seasonalDemand" => "SearchBooleanField",
		"sellOnEBay" => "SearchBooleanField",
		"serialNumber" => "SearchStringField",
		"serialNumberLocation" => "SearchMultiSelectField",
		"shipIndividually" => "SearchBooleanField",
		"shipPackage" => "SearchMultiSelectField",
		"shippingCarrier" => "SearchEnumMultiSelectField",
		"shippingRate" => "SearchDoubleField",
		"shoppingDotComCategory" => "SearchStringField",
		"shoppingProductFeed" => "SearchBooleanField",
		"shopzillaCategoryId" => "SearchLongField",
		"shopzillaProductFeed" => "SearchBooleanField",
		"sitemapPriority" => "SearchEnumMultiSelectField",
		"softDescriptor" => "SearchMultiSelectField",
		"startingPrice" => "SearchDoubleField",
		"stockDescription" => "SearchStringField",
		"stockUnit" => "SearchMultiSelectField",
		"storeDescription" => "SearchStringField",
		"subsidiary" => "SearchMultiSelectField",
		"subType" => "SearchEnumMultiSelectField",
		"supplyLotSizingMethod" => "SearchEnumMultiSelectField",
		"supplyReplenishmentMethod" => "SearchEnumMultiSelectField",
		"supplyTimeFence" => "SearchLongField",
		"supplyType" => "SearchEnumMultiSelectField",
		"taxCode" => "SearchMultiSelectField",
		"taxSchedule" => "SearchMultiSelectField",
		"thumbnailUrl" => "SearchStringField",
		"totalValue" => "SearchDoubleField",
		"trackLandedCost" => "SearchBooleanField",
		"transferPrice" => "SearchDoubleField",
		"type" => "SearchEnumMultiSelectField",
		"unitsType" => "SearchMultiSelectField",
		"upcCode" => "SearchStringField",
		"urlComponent" => "SearchStringField",
		"useBins" => "SearchBooleanField",
		"useComponentYield" => "SearchBooleanField",
		"useMarginalRates" => "SearchBooleanField",
		"vendor" => "SearchMultiSelectField",
		"vendorCode" => "SearchStringField",
		"vendorCost" => "SearchDoubleField",
		"vendorCostEntered" => "SearchDoubleField",
		"vendorName" => "SearchStringField",
		"vendorPriceCurrency" => "SearchMultiSelectField",
		"vsoeDeferral" => "SearchEnumMultiSelectField",
		"vsoeDelivered" => "SearchBooleanField",
		"vsoePermitDiscount" => "SearchEnumMultiSelectField",
		"vsoePrice" => "SearchDoubleField",
		"webSite" => "SearchMultiSelectField",
		"weight" => "SearchDoubleField",
		"yahooProductFeed" => "SearchBooleanField",
		"customFieldList" => "SearchCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
