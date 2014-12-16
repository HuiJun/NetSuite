<?php

class TransactionSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $account;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $accountType;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $actualShipDate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $altSalesAmount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $altSalesNetAmount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $amount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $amountPaid;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $amountRemaining;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $amountUnbilled;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $anyLineItem;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $appliedToForeignAmount;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $appliedToIsFxVariance;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $appliedToLinkAmount;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $appliedToLinkType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $appliedToTransaction;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $applyingForeignAmount;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $applyingIsFxVariance;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $applyingLinkAmount;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $applyingLinkType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $applyingTransaction;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $approvalStatus;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $authCode;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $autoCalculateLag;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $avsStreetMatch;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $avsZipMatch;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $billable;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $billAddress;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $billAddressee;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $billAttention;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $billCity;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $billCountry;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $billCounty;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $billedDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $billingSchedule;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $billingStatus;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $billingTransaction;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $billPhone;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $billState;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $billVarianceStatus;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $billZip;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $binNumber;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $binNumberQuantity;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $bomQuantity;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $bookSpecificTransaction;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $buildEntireAssembly;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $buildVariance;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $built;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $catchUpPeriod;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $ccCustomerCode;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $ccExpireDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $ccName;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $ccNumber;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $chargeType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $class;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $cleared;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $closed;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $closeDate;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $cogs;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $commissionEffectiveDate;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $commit;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $componentYield;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $confirmationNumber;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $contribution;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $costComponentAmount;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $costComponentCategory;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $costComponentItem;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $costComponentQuantity;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $costComponentStandardCost;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $costEstimate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $costEstimateRate;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $costEstimateType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $createdBy;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $createdFrom;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $creditAmount;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $cscMatch;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $currency;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $customerSubOf;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $customForm;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $custType;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $dateCreated;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $daysOpen;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $daysOverdue;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $debitAmount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $deferredRevenue;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $deferRevRec;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $department;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $depositDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $depositTransaction;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $drAccount;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $dueDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $email;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $employee;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $entity;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $entityStatus;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estGrossProfit;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estGrossProfitPct;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $exchangeRate;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $excludeCommission;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $excludeFromRateRequest;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $expectedCloseDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $expectedReceiptDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $expenseCategory;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $expenseDate;
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
	 * @var SearchBooleanField
	 */
	public $finChrg;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $firmed;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $forecastType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $fulfillingTransaction;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $fxAccount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxAmount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxCostEstimate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxCostEstimateRate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxEstGrossProfit;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxTranCostEstimate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxVsoeAllocation;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxVsoeAmount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxVsoePrice;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $gcoAvailabelToCharge;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $gcoAvailableToRefund;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $gcoAvsStreetMatch;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $gcoAvsZipMatch;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $gcoBuyerAccountAge;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $gcoBuyerIp;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $gcoChargeAmount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $gcoChargebackAmount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $gcoConfirmedChargedTotal;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $gcoConfirmedRefundedTotal;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $gcoCreditcardNumber;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $gcoCscMatch;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $gcoFinancialState;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $gcoFulfillmentState;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $gcoOrderId;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $gcoOrderTotal;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $gcoPromotionAmount;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $gcoPromotionName;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $gcoRefundAmount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $gcoShippingTotal;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $gcoStateChangedDetail;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $giftCertificate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $grossAmount;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $includeInForecast;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $intercoStatus;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $intercoTransaction;
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
	public $inVsoeBundle;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isAllocation;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isBackflush;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isGcoChargeback;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isGcoChargeConfirmed;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isGcoPaymentGuaranteed;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isGcoRefundConfirmed;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isIntercompanyAdjustment;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isMultiShipTo;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isPayPalMeth;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isReversal;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isRevRecTransaction;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isScrap;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isShipAddress;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isTransferPriceCosting;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isVsoeAlloc;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isWip;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $itemRevision;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $itemSubOf;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $landedCostPerLine;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $leadSource;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $mainLine;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $mainName;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $manufacturingRouting;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $matchBillToReceipt;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $memo;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $memoMain;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $memorized;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $merchantAccount;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $message;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $multiSubsidiary;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $nameText;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $netAmount;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $nextApprover;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $nextBillDate;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $nonReimbursable;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $number;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $opportunity;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $orderPriority;
	/**
	 * @access public
	 * @var SearchTextNumberField
	 */
	public $otherRefNum;
	/**
	 * @access public
	 * @var SearchTextNumberField
	 */
	public $otherRefNumNonDeposit;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $overheadParentItem;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $packageCount;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $paidTransaction;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $parent;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $partner;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $partnerContribution;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $partnerRole;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $partnerTeamMember;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $payingTransaction;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $paymentApproved;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $paymentEventDate;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $paymentEventHoldReason;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $paymentEventPurchaseCardUsed;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $paymentEventPurchaseDataSent;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $paymentEventResult;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $paymentEventType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $paymentMethod;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $payPalPending;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $payPalStatus;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $payPalTranId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $pnRefNum;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $poAsText;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $posting;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $postingPeriod;
	/**
	 * @access public
	 * @var PostingPeriodDate
	 */
	public $postingPeriodRelative;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $priceLevel;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $printedPickingTicket;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $probability;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $projectedAmount;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $promoCode;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $purchaseOrder;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantity;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityBilled;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityCommitted;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityPacked;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityPicked;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityRevCommitted;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityShipRecv;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $recognizedRevenue;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $recordType;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $refNumber;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $revCommitStatus;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $revCommittingStatus;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $revCommittingTransaction;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $revenueStatus;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $reversalDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $reversalNumber;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $revRecEndDate;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $revRecOnRevCommitment;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $revRecStartDate;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $revRecTermInMonths;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $salesEffectiveDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $salesOrder;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $salesRep;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $salesTeamMember;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $salesTeamRole;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $schedulingMethod;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $serialNumber;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $serialNumberCost;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $serialNumberCostAdjustment;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $serialNumberQuantity;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $serialNumbers;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $shipAddress;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $shipAddressee;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $shipAttention;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $shipCity;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $shipComplete;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $shipCountry;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $shipCounty;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $shipDate;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $shipGroup;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $shipMethod;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $shipPhone;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $shipping;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $shipRecvStatus;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $shipRecvStatusLine;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $shipState;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $shipTo;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $shipZip;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $source;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $statistical;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $taxItem;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $taxLine;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxPeriod;
	/**
	 * @access public
	 * @var PostingPeriodDate
	 */
	public $taxPeriodRelative;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $taxRate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $terms;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $toBeEmailed;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $toBePrinted;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $toSubsidiary;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $totalAmount;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $trackingNumbers;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $tranCostEstimate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $tranDate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $tranEstGrossProfit;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $tranEstGrossProfitPct;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $tranFxEstGrossProfit;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $tranId;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $tranIsVsoeBundle;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $transactionDiscount;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $transactionLineType;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $transactionNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $transferLocation;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $transferOrderQuantityCommitted;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $transferOrderQuantityPacked;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $transferOrderQuantityPicked;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $transferOrderQuantityReceived;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $transferOrderQuantityShipped;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $type;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $unit;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $unitCostOverride;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $unitsType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $vendType;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $visibleToCustomer;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $voided;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $vsoeAllocation;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $vsoeAmount;
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
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"account" => "SearchMultiSelectField",
		"accountType" => "SearchMultiSelectField",
		"actualShipDate" => "SearchDateField",
		"altSalesAmount" => "SearchDoubleField",
		"altSalesNetAmount" => "SearchDoubleField",
		"amount" => "SearchDoubleField",
		"amountPaid" => "SearchDoubleField",
		"amountRemaining" => "SearchDoubleField",
		"amountUnbilled" => "SearchDoubleField",
		"anyLineItem" => "SearchMultiSelectField",
		"appliedToForeignAmount" => "SearchDoubleField",
		"appliedToIsFxVariance" => "SearchBooleanField",
		"appliedToLinkAmount" => "SearchDoubleField",
		"appliedToLinkType" => "SearchEnumMultiSelectField",
		"appliedToTransaction" => "SearchMultiSelectField",
		"applyingForeignAmount" => "SearchDoubleField",
		"applyingIsFxVariance" => "SearchBooleanField",
		"applyingLinkAmount" => "SearchDoubleField",
		"applyingLinkType" => "SearchEnumMultiSelectField",
		"applyingTransaction" => "SearchMultiSelectField",
		"approvalStatus" => "SearchEnumMultiSelectField",
		"authCode" => "SearchStringField",
		"autoCalculateLag" => "SearchBooleanField",
		"avsStreetMatch" => "SearchEnumMultiSelectField",
		"avsZipMatch" => "SearchEnumMultiSelectField",
		"billable" => "SearchBooleanField",
		"billAddress" => "SearchStringField",
		"billAddressee" => "SearchStringField",
		"billAttention" => "SearchStringField",
		"billCity" => "SearchStringField",
		"billCountry" => "SearchEnumMultiSelectField",
		"billCounty" => "SearchStringField",
		"billedDate" => "SearchDateField",
		"billingSchedule" => "SearchMultiSelectField",
		"billingStatus" => "SearchBooleanField",
		"billingTransaction" => "SearchMultiSelectField",
		"billPhone" => "SearchStringField",
		"billState" => "SearchStringField",
		"billVarianceStatus" => "SearchEnumMultiSelectField",
		"billZip" => "SearchStringField",
		"binNumber" => "SearchStringField",
		"binNumberQuantity" => "SearchDoubleField",
		"bomQuantity" => "SearchDoubleField",
		"bookSpecificTransaction" => "SearchBooleanField",
		"buildEntireAssembly" => "SearchBooleanField",
		"buildVariance" => "SearchDoubleField",
		"built" => "SearchDoubleField",
		"catchUpPeriod" => "SearchMultiSelectField",
		"ccCustomerCode" => "SearchStringField",
		"ccExpireDate" => "SearchDateField",
		"ccName" => "SearchStringField",
		"ccNumber" => "SearchStringField",
		"chargeType" => "SearchEnumMultiSelectField",
		"class" => "SearchMultiSelectField",
		"cleared" => "SearchBooleanField",
		"closed" => "SearchBooleanField",
		"closeDate" => "SearchDateField",
		"cogs" => "SearchBooleanField",
		"commissionEffectiveDate" => "SearchDateField",
		"commit" => "SearchEnumMultiSelectField",
		"componentYield" => "SearchDoubleField",
		"confirmationNumber" => "SearchStringField",
		"contribution" => "SearchLongField",
		"costComponentAmount" => "SearchDoubleField",
		"costComponentCategory" => "SearchMultiSelectField",
		"costComponentItem" => "SearchMultiSelectField",
		"costComponentQuantity" => "SearchDoubleField",
		"costComponentStandardCost" => "SearchDoubleField",
		"costEstimate" => "SearchDoubleField",
		"costEstimateRate" => "SearchDoubleField",
		"costEstimateType" => "SearchEnumMultiSelectField",
		"createdBy" => "SearchMultiSelectField",
		"createdFrom" => "SearchMultiSelectField",
		"creditAmount" => "SearchDoubleField",
		"cscMatch" => "SearchEnumMultiSelectField",
		"currency" => "SearchMultiSelectField",
		"customerSubOf" => "SearchMultiSelectField",
		"customForm" => "SearchMultiSelectField",
		"custType" => "SearchMultiSelectField",
		"dateCreated" => "SearchDateField",
		"daysOpen" => "SearchLongField",
		"daysOverdue" => "SearchLongField",
		"debitAmount" => "SearchDoubleField",
		"deferredRevenue" => "SearchDoubleField",
		"deferRevRec" => "SearchBooleanField",
		"department" => "SearchMultiSelectField",
		"depositDate" => "SearchDateField",
		"depositTransaction" => "SearchMultiSelectField",
		"drAccount" => "SearchMultiSelectField",
		"dueDate" => "SearchDateField",
		"email" => "SearchStringField",
		"employee" => "SearchMultiSelectField",
		"endDate" => "SearchDateField",
		"entity" => "SearchMultiSelectField",
		"entityStatus" => "SearchMultiSelectField",
		"estGrossProfit" => "SearchDoubleField",
		"estGrossProfitPct" => "SearchDoubleField",
		"exchangeRate" => "SearchDoubleField",
		"excludeCommission" => "SearchBooleanField",
		"excludeFromRateRequest" => "SearchBooleanField",
		"expectedCloseDate" => "SearchDateField",
		"expectedReceiptDate" => "SearchDateField",
		"expenseCategory" => "SearchMultiSelectField",
		"expenseDate" => "SearchDateField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"finChrg" => "SearchBooleanField",
		"firmed" => "SearchBooleanField",
		"forecastType" => "SearchEnumMultiSelectField",
		"fulfillingTransaction" => "SearchMultiSelectField",
		"fxAccount" => "SearchMultiSelectField",
		"fxAmount" => "SearchDoubleField",
		"fxCostEstimate" => "SearchDoubleField",
		"fxCostEstimateRate" => "SearchDoubleField",
		"fxEstGrossProfit" => "SearchDoubleField",
		"fxTranCostEstimate" => "SearchDoubleField",
		"fxVsoeAllocation" => "SearchDoubleField",
		"fxVsoeAmount" => "SearchDoubleField",
		"fxVsoePrice" => "SearchDoubleField",
		"gcoAvailabelToCharge" => "SearchBooleanField",
		"gcoAvailableToRefund" => "SearchBooleanField",
		"gcoAvsStreetMatch" => "SearchEnumMultiSelectField",
		"gcoAvsZipMatch" => "SearchEnumMultiSelectField",
		"gcoBuyerAccountAge" => "SearchLongField",
		"gcoBuyerIp" => "SearchStringField",
		"gcoChargeAmount" => "SearchDoubleField",
		"gcoChargebackAmount" => "SearchDoubleField",
		"gcoConfirmedChargedTotal" => "SearchDoubleField",
		"gcoConfirmedRefundedTotal" => "SearchDoubleField",
		"gcoCreditcardNumber" => "SearchStringField",
		"gcoCscMatch" => "SearchEnumMultiSelectField",
		"gcoFinancialState" => "SearchStringField",
		"gcoFulfillmentState" => "SearchStringField",
		"gcoOrderId" => "SearchStringField",
		"gcoOrderTotal" => "SearchDoubleField",
		"gcoPromotionAmount" => "SearchDoubleField",
		"gcoPromotionName" => "SearchStringField",
		"gcoRefundAmount" => "SearchDoubleField",
		"gcoShippingTotal" => "SearchDoubleField",
		"gcoStateChangedDetail" => "SearchStringField",
		"giftCertificate" => "SearchStringField",
		"grossAmount" => "SearchDoubleField",
		"includeInForecast" => "SearchBooleanField",
		"intercoStatus" => "SearchEnumMultiSelectField",
		"intercoTransaction" => "SearchMultiSelectField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"inVsoeBundle" => "SearchBooleanField",
		"isAllocation" => "SearchBooleanField",
		"isBackflush" => "SearchBooleanField",
		"isGcoChargeback" => "SearchBooleanField",
		"isGcoChargeConfirmed" => "SearchBooleanField",
		"isGcoPaymentGuaranteed" => "SearchBooleanField",
		"isGcoRefundConfirmed" => "SearchBooleanField",
		"isIntercompanyAdjustment" => "SearchBooleanField",
		"isMultiShipTo" => "SearchBooleanField",
		"isPayPalMeth" => "SearchBooleanField",
		"isReversal" => "SearchBooleanField",
		"isRevRecTransaction" => "SearchBooleanField",
		"isScrap" => "SearchBooleanField",
		"isShipAddress" => "SearchBooleanField",
		"isTransferPriceCosting" => "SearchBooleanField",
		"isVsoeAlloc" => "SearchBooleanField",
		"isWip" => "SearchBooleanField",
		"item" => "SearchMultiSelectField",
		"itemRevision" => "SearchMultiSelectField",
		"itemSubOf" => "SearchMultiSelectField",
		"landedCostPerLine" => "SearchBooleanField",
		"lastModifiedDate" => "SearchDateField",
		"leadSource" => "SearchMultiSelectField",
		"location" => "SearchMultiSelectField",
		"mainLine" => "SearchBooleanField",
		"mainName" => "SearchMultiSelectField",
		"manufacturingRouting" => "SearchMultiSelectField",
		"matchBillToReceipt" => "SearchBooleanField",
		"memo" => "SearchStringField",
		"memoMain" => "SearchStringField",
		"memorized" => "SearchBooleanField",
		"merchantAccount" => "SearchStringField",
		"message" => "SearchStringField",
		"multiSubsidiary" => "SearchBooleanField",
		"nameText" => "SearchStringField",
		"netAmount" => "SearchDoubleField",
		"nextApprover" => "SearchMultiSelectField",
		"nextBillDate" => "SearchDateField",
		"nonReimbursable" => "SearchBooleanField",
		"number" => "SearchLongField",
		"opportunity" => "SearchMultiSelectField",
		"orderPriority" => "SearchDoubleField",
		"otherRefNum" => "SearchTextNumberField",
		"otherRefNumNonDeposit" => "SearchTextNumberField",
		"overheadParentItem" => "SearchMultiSelectField",
		"packageCount" => "SearchLongField",
		"paidTransaction" => "SearchMultiSelectField",
		"parent" => "SearchLongField",
		"partner" => "SearchMultiSelectField",
		"partnerContribution" => "SearchLongField",
		"partnerRole" => "SearchMultiSelectField",
		"partnerTeamMember" => "SearchMultiSelectField",
		"payingTransaction" => "SearchMultiSelectField",
		"paymentApproved" => "SearchBooleanField",
		"paymentEventDate" => "SearchDateField",
		"paymentEventHoldReason" => "SearchEnumMultiSelectField",
		"paymentEventPurchaseCardUsed" => "SearchBooleanField",
		"paymentEventPurchaseDataSent" => "SearchBooleanField",
		"paymentEventResult" => "SearchEnumMultiSelectField",
		"paymentEventType" => "SearchEnumMultiSelectField",
		"paymentMethod" => "SearchMultiSelectField",
		"payPalPending" => "SearchBooleanField",
		"payPalStatus" => "SearchStringField",
		"payPalTranId" => "SearchStringField",
		"pnRefNum" => "SearchStringField",
		"poAsText" => "SearchStringField",
		"posting" => "SearchBooleanField",
		"postingPeriod" => "RecordRef",
		"postingPeriodRelative" => "PostingPeriodDate",
		"priceLevel" => "SearchMultiSelectField",
		"printedPickingTicket" => "SearchBooleanField",
		"probability" => "SearchLongField",
		"projectedAmount" => "SearchDoubleField",
		"promoCode" => "SearchMultiSelectField",
		"purchaseOrder" => "SearchMultiSelectField",
		"quantity" => "SearchDoubleField",
		"quantityBilled" => "SearchDoubleField",
		"quantityCommitted" => "SearchDoubleField",
		"quantityPacked" => "SearchDoubleField",
		"quantityPicked" => "SearchDoubleField",
		"quantityRevCommitted" => "SearchDoubleField",
		"quantityShipRecv" => "SearchDoubleField",
		"recognizedRevenue" => "SearchDoubleField",
		"recordType" => "SearchStringField",
		"refNumber" => "SearchLongField",
		"revCommitStatus" => "SearchEnumMultiSelectField",
		"revCommittingStatus" => "SearchBooleanField",
		"revCommittingTransaction" => "SearchMultiSelectField",
		"revenueStatus" => "SearchEnumMultiSelectField",
		"reversalDate" => "SearchDateField",
		"reversalNumber" => "SearchStringField",
		"revRecEndDate" => "SearchDateField",
		"revRecOnRevCommitment" => "SearchBooleanField",
		"revRecStartDate" => "SearchDateField",
		"revRecTermInMonths" => "SearchLongField",
		"salesEffectiveDate" => "SearchDateField",
		"salesOrder" => "SearchMultiSelectField",
		"salesRep" => "SearchMultiSelectField",
		"salesTeamMember" => "SearchMultiSelectField",
		"salesTeamRole" => "SearchMultiSelectField",
		"schedulingMethod" => "SearchEnumMultiSelectField",
		"serialNumber" => "SearchStringField",
		"serialNumberCost" => "SearchDoubleField",
		"serialNumberCostAdjustment" => "SearchDoubleField",
		"serialNumberQuantity" => "SearchDoubleField",
		"serialNumbers" => "SearchStringField",
		"shipAddress" => "SearchStringField",
		"shipAddressee" => "SearchStringField",
		"shipAttention" => "SearchStringField",
		"shipCity" => "SearchStringField",
		"shipComplete" => "SearchBooleanField",
		"shipCountry" => "SearchEnumMultiSelectField",
		"shipCounty" => "SearchStringField",
		"shipDate" => "SearchDateField",
		"shipGroup" => "SearchLongField",
		"shipMethod" => "SearchMultiSelectField",
		"shipPhone" => "SearchStringField",
		"shipping" => "SearchBooleanField",
		"shipRecvStatus" => "SearchBooleanField",
		"shipRecvStatusLine" => "SearchBooleanField",
		"shipState" => "SearchMultiSelectField",
		"shipTo" => "SearchMultiSelectField",
		"shipZip" => "SearchStringField",
		"source" => "SearchEnumMultiSelectField",
		"startDate" => "SearchDateField",
		"statistical" => "SearchBooleanField",
		"status" => "SearchEnumMultiSelectField",
		"subsidiary" => "SearchMultiSelectField",
		"taxItem" => "SearchMultiSelectField",
		"taxLine" => "SearchBooleanField",
		"taxPeriod" => "RecordRef",
		"taxPeriodRelative" => "PostingPeriodDate",
		"taxRate" => "SearchDoubleField",
		"terms" => "SearchMultiSelectField",
		"title" => "SearchStringField",
		"toBeEmailed" => "SearchBooleanField",
		"toBePrinted" => "SearchBooleanField",
		"toSubsidiary" => "SearchMultiSelectField",
		"totalAmount" => "SearchDoubleField",
		"trackingNumbers" => "SearchStringField",
		"tranCostEstimate" => "SearchDoubleField",
		"tranDate" => "SearchDateField",
		"tranEstGrossProfit" => "SearchDoubleField",
		"tranEstGrossProfitPct" => "SearchDoubleField",
		"tranFxEstGrossProfit" => "SearchDoubleField",
		"tranId" => "SearchStringField",
		"tranIsVsoeBundle" => "SearchBooleanField",
		"transactionDiscount" => "SearchBooleanField",
		"transactionLineType" => "SearchEnumMultiSelectField",
		"transactionNumber" => "SearchStringField",
		"transferLocation" => "SearchMultiSelectField",
		"transferOrderQuantityCommitted" => "SearchDoubleField",
		"transferOrderQuantityPacked" => "SearchDoubleField",
		"transferOrderQuantityPicked" => "SearchDoubleField",
		"transferOrderQuantityReceived" => "SearchDoubleField",
		"transferOrderQuantityShipped" => "SearchDoubleField",
		"type" => "SearchEnumMultiSelectField",
		"unit" => "SearchMultiSelectField",
		"unitCostOverride" => "SearchDoubleField",
		"unitsType" => "SearchMultiSelectField",
		"vendType" => "SearchMultiSelectField",
		"visibleToCustomer" => "SearchBooleanField",
		"voided" => "SearchBooleanField",
		"vsoeAllocation" => "SearchDoubleField",
		"vsoeAmount" => "SearchDoubleField",
		"vsoeDeferral" => "SearchEnumMultiSelectField",
		"vsoeDelivered" => "SearchBooleanField",
		"vsoePermitDiscount" => "SearchEnumMultiSelectField",
		"vsoePrice" => "SearchDoubleField",
		"webSite" => "SearchMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
