<?php

class CustomerSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $accountNumber;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $address;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $addressee;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $addressLabel;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $addressPhone;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $attention;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $availableOffline;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $balance;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $billAddress;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $boughtAmount;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $boughtDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $buyingReason;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $buyingTimeFrame;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $category;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $ccCustomerCode;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $ccDefault;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $ccExpDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $ccHolderName;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $ccNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $ccState;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $ccStateFrom;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $ccType;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $city;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $classBought;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $comments;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $companyName;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $consolBalance;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $consolDaysOverdue;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $consolDepositBalance;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $consolOverdueBalance;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $consolUnbilledOrders;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $contact;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $contribution;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $conversionDate;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $country;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $county;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $creditHold;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $creditHoldOverride;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $creditLimit;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $currency;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $custStage;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $custStatus;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $dateClosed;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $dateCreated;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $daysOverdue;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $defaultOrderPriority;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $depositBalance;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $deptBought;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $drAccount;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $email;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $emailPreference;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $emailTransactions;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $entityId;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $entityStatus;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estimatedBudget;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $explicitConversion;
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
	 * @var SearchBooleanField
	 */
	public $faxTransactions;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $firstName;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $firstOrderDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $firstSaleDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $fxAccount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxBalance;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxConsolBalance;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxConsolUnbilledOrders;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxUnbilledOrders;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $giveAccess;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $globalSubscriptionStatus;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $group;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $groupPricingLevel;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $hasDuplicates;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $image;
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
	public $isBudgetApproved;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isDefaultBilling;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isDefaultShipping;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isPerson;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isReportedLead;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isShipAddress;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $itemPricingLevel;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $itemPricingUnitPrice;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $itemsBought;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $itemsOrdered;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $language;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $lastName;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastOrderDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastSaleDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $leadDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $leadSource;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $level;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $locationBought;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $manualCreditHold;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $merchantAccount;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $middleName;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $monthlyClosing;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $onCreditHold;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $orderedAmount;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $orderedDate;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $otherRelationships;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $overdueBalance;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $parent;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $parentItemsBought;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $parentItemsOrdered;
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
	 * @var SearchStringField
	 */
	public $pec;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $permission;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $phone;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $phoneticName;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $priceLevel;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $pricingGroup;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $pricingItem;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $printTransactions;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $prospectDate;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $pstExempt;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $receivablesAccount;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $reminderDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $resaleNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $role;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $salesReadiness;
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
	 * @var SearchStringField
	 */
	public $salutation;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $shipAddress;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $shipComplete;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $shippingItem;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $stage;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $state;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidBought;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $taxable;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $terms;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $territory;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $unbilledOrders;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $url;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $vatRegNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $webLead;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $zipCode;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"accountNumber" => "SearchStringField",
		"address" => "SearchStringField",
		"addressee" => "SearchStringField",
		"addressLabel" => "SearchStringField",
		"addressPhone" => "SearchStringField",
		"attention" => "SearchStringField",
		"availableOffline" => "SearchBooleanField",
		"balance" => "SearchDoubleField",
		"billAddress" => "SearchStringField",
		"boughtAmount" => "SearchDoubleField",
		"boughtDate" => "SearchDateField",
		"buyingReason" => "SearchMultiSelectField",
		"buyingTimeFrame" => "SearchMultiSelectField",
		"category" => "SearchMultiSelectField",
		"ccCustomerCode" => "SearchStringField",
		"ccDefault" => "SearchBooleanField",
		"ccExpDate" => "SearchDateField",
		"ccHolderName" => "SearchStringField",
		"ccNumber" => "SearchStringField",
		"ccState" => "SearchMultiSelectField",
		"ccStateFrom" => "SearchDateField",
		"ccType" => "SearchMultiSelectField",
		"city" => "SearchStringField",
		"classBought" => "SearchMultiSelectField",
		"comments" => "SearchStringField",
		"companyName" => "SearchStringField",
		"consolBalance" => "SearchDoubleField",
		"consolDaysOverdue" => "SearchLongField",
		"consolDepositBalance" => "SearchDoubleField",
		"consolOverdueBalance" => "SearchDoubleField",
		"consolUnbilledOrders" => "SearchDoubleField",
		"contact" => "SearchStringField",
		"contribution" => "SearchLongField",
		"conversionDate" => "SearchDateField",
		"country" => "SearchEnumMultiSelectField",
		"county" => "SearchStringField",
		"creditHold" => "SearchEnumMultiSelectField",
		"creditHoldOverride" => "SearchBooleanField",
		"creditLimit" => "SearchDoubleField",
		"currency" => "SearchMultiSelectField",
		"custStage" => "SearchMultiSelectField",
		"custStatus" => "SearchMultiSelectField",
		"dateClosed" => "SearchDateField",
		"dateCreated" => "SearchDateField",
		"daysOverdue" => "SearchLongField",
		"defaultOrderPriority" => "SearchDoubleField",
		"depositBalance" => "SearchDoubleField",
		"deptBought" => "SearchMultiSelectField",
		"drAccount" => "SearchMultiSelectField",
		"email" => "SearchStringField",
		"emailPreference" => "SearchEnumMultiSelectField",
		"emailTransactions" => "SearchBooleanField",
		"endDate" => "SearchDateField",
		"entityId" => "SearchStringField",
		"entityStatus" => "SearchMultiSelectField",
		"estimatedBudget" => "SearchDoubleField",
		"explicitConversion" => "SearchBooleanField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"fax" => "SearchStringField",
		"faxTransactions" => "SearchBooleanField",
		"firstName" => "SearchStringField",
		"firstOrderDate" => "SearchDateField",
		"firstSaleDate" => "SearchDateField",
		"fxAccount" => "SearchMultiSelectField",
		"fxBalance" => "SearchDoubleField",
		"fxConsolBalance" => "SearchDoubleField",
		"fxConsolUnbilledOrders" => "SearchDoubleField",
		"fxUnbilledOrders" => "SearchDoubleField",
		"giveAccess" => "SearchBooleanField",
		"globalSubscriptionStatus" => "SearchEnumMultiSelectField",
		"group" => "SearchMultiSelectField",
		"groupPricingLevel" => "SearchMultiSelectField",
		"hasDuplicates" => "SearchBooleanField",
		"image" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isBudgetApproved" => "SearchBooleanField",
		"isDefaultBilling" => "SearchBooleanField",
		"isDefaultShipping" => "SearchBooleanField",
		"isInactive" => "SearchBooleanField",
		"isPerson" => "SearchBooleanField",
		"isReportedLead" => "SearchBooleanField",
		"isShipAddress" => "SearchBooleanField",
		"itemPricingLevel" => "SearchMultiSelectField",
		"itemPricingUnitPrice" => "SearchDoubleField",
		"itemsBought" => "SearchMultiSelectField",
		"itemsOrdered" => "SearchMultiSelectField",
		"language" => "SearchEnumMultiSelectField",
		"lastModifiedDate" => "SearchDateField",
		"lastName" => "SearchStringField",
		"lastOrderDate" => "SearchDateField",
		"lastSaleDate" => "SearchDateField",
		"leadDate" => "SearchDateField",
		"leadSource" => "SearchMultiSelectField",
		"level" => "SearchEnumMultiSelectField",
		"locationBought" => "SearchMultiSelectField",
		"manualCreditHold" => "SearchBooleanField",
		"merchantAccount" => "SearchMultiSelectField",
		"middleName" => "SearchStringField",
		"monthlyClosing" => "SearchEnumMultiSelectField",
		"onCreditHold" => "SearchBooleanField",
		"orderedAmount" => "SearchDoubleField",
		"orderedDate" => "SearchDateField",
		"otherRelationships" => "SearchEnumMultiSelectField",
		"overdueBalance" => "SearchDoubleField",
		"parent" => "SearchMultiSelectField",
		"parentItemsBought" => "SearchMultiSelectField",
		"parentItemsOrdered" => "SearchMultiSelectField",
		"partner" => "SearchMultiSelectField",
		"partnerContribution" => "SearchLongField",
		"partnerRole" => "SearchMultiSelectField",
		"partnerTeamMember" => "SearchMultiSelectField",
		"pec" => "SearchStringField",
		"permission" => "SearchEnumMultiSelectField",
		"phone" => "SearchStringField",
		"phoneticName" => "SearchStringField",
		"priceLevel" => "SearchMultiSelectField",
		"pricingGroup" => "SearchMultiSelectField",
		"pricingItem" => "SearchMultiSelectField",
		"printTransactions" => "SearchBooleanField",
		"prospectDate" => "SearchDateField",
		"pstExempt" => "SearchBooleanField",
		"receivablesAccount" => "SearchMultiSelectField",
		"reminderDate" => "SearchDateField",
		"resaleNumber" => "SearchStringField",
		"role" => "SearchMultiSelectField",
		"salesReadiness" => "SearchMultiSelectField",
		"salesRep" => "SearchMultiSelectField",
		"salesTeamMember" => "SearchMultiSelectField",
		"salesTeamRole" => "SearchMultiSelectField",
		"salutation" => "SearchStringField",
		"shipAddress" => "SearchStringField",
		"shipComplete" => "SearchBooleanField",
		"shippingItem" => "SearchMultiSelectField",
		"stage" => "SearchEnumMultiSelectField",
		"startDate" => "SearchDateField",
		"state" => "SearchStringField",
		"subsidBought" => "SearchMultiSelectField",
		"subsidiary" => "SearchMultiSelectField",
		"taxable" => "SearchBooleanField",
		"terms" => "SearchMultiSelectField",
		"territory" => "SearchMultiSelectField",
		"title" => "SearchStringField",
		"unbilledOrders" => "SearchDoubleField",
		"url" => "SearchStringField",
		"vatRegNumber" => "SearchStringField",
		"webLead" => "SearchBooleanField",
		"zipCode" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
