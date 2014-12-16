<?php

class Customer extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var string
	 */
	public $entityId;
	/**
	 * @access public
	 * @var string
	 */
	public $altName;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isPerson;
	/**
	 * @access public
	 * @var string
	 */
	public $phoneticName;
	/**
	 * @access public
	 * @var string
	 */
	public $salutation;
	/**
	 * @access public
	 * @var string
	 */
	public $firstName;
	/**
	 * @access public
	 * @var string
	 */
	public $middleName;
	/**
	 * @access public
	 * @var string
	 */
	public $lastName;
	/**
	 * @access public
	 * @var string
	 */
	public $companyName;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $entityStatus;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $parent;
	/**
	 * @access public
	 * @var string
	 */
	public $phone;
	/**
	 * @access public
	 * @var string
	 */
	public $fax;
	/**
	 * @access public
	 * @var string
	 */
	public $email;
	/**
	 * @access public
	 * @var string
	 */
	public $url;
	/**
	 * @access public
	 * @var string
	 */
	public $defaultAddress;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $category;
	/**
	 * @access public
	 * @var string
	 */
	public $title;
	/**
	 * @access public
	 * @var string
	 */
	public $printOnCheckAs;
	/**
	 * @access public
	 * @var string
	 */
	public $altPhone;
	/**
	 * @access public
	 * @var string
	 */
	public $homePhone;
	/**
	 * @access public
	 * @var string
	 */
	public $mobilePhone;
	/**
	 * @access public
	 * @var string
	 */
	public $altEmail;
	/**
	 * @access public
	 * @var Language
	 */
	public $language;
	/**
	 * @access public
	 * @var string
	 */
	public $comments;
	/**
	 * @access public
	 * @var CustomerNumberFormat
	 */
	public $numberFormat;
	/**
	 * @access public
	 * @var CustomerNegativeNumberFormat
	 */
	public $negativeNumberFormat;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $dateCreated;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $image;
	/**
	 * @access public
	 * @var EmailPreference
	 */
	public $emailPreference;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $representingSubsidiary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $salesRep;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $territory;
	/**
	 * @access public
	 * @var string
	 */
	public $contribPct;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $partner;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $salesGroup;
	/**
	 * @access public
	 * @var string
	 */
	public $vatRegNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $accountNumber;
	/**
	 * @access public
	 * @var boolean
	 */
	public $taxExempt;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $terms;
	/**
	 * @access public
	 * @var float
	 */
	public $creditLimit;
	/**
	 * @access public
	 * @var CustomerCreditHoldOverride
	 */
	public $creditHoldOverride;
	/**
	 * @access public
	 * @var CustomerMonthlyClosing
	 */
	public $monthlyClosing;
	/**
	 * @access public
	 * @var boolean
	 */
	public $overrideCurrencyFormat;
	/**
	 * @access public
	 * @var string
	 */
	public $displaySymbol;
	/**
	 * @access public
	 * @var CurrencySymbolPlacement
	 */
	public $symbolPlacement;
	/**
	 * @access public
	 * @var float
	 */
	public $balance;
	/**
	 * @access public
	 * @var float
	 */
	public $overdueBalance;
	/**
	 * @access public
	 * @var integer
	 */
	public $daysOverdue;
	/**
	 * @access public
	 * @var float
	 */
	public $unbilledOrders;
	/**
	 * @access public
	 * @var float
	 */
	public $consolUnbilledOrders;
	/**
	 * @access public
	 * @var float
	 */
	public $consolOverdueBalance;
	/**
	 * @access public
	 * @var float
	 */
	public $consolDepositBalance;
	/**
	 * @access public
	 * @var float
	 */
	public $consolBalance;
	/**
	 * @access public
	 * @var float
	 */
	public $consolAging;
	/**
	 * @access public
	 * @var integer
	 */
	public $consolDaysOverdue;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $priceLevel;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $currency;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $prefCCProcessor;
	/**
	 * @access public
	 * @var float
	 */
	public $depositBalance;
	/**
	 * @access public
	 * @var boolean
	 */
	public $shipComplete;
	/**
	 * @access public
	 * @var boolean
	 */
	public $taxable;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxItem;
	/**
	 * @access public
	 * @var string
	 */
	public $resaleNumber;
	/**
	 * @access public
	 * @var float
	 */
	public $aging;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $startDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $endDate;
	/**
	 * @access public
	 * @var integer
	 */
	public $reminderDays;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $shippingItem;
	/**
	 * @access public
	 * @var string
	 */
	public $thirdPartyAcct;
	/**
	 * @access public
	 * @var string
	 */
	public $thirdPartyZipcode;
	/**
	 * @access public
	 * @var Country
	 */
	public $thirdPartyCountry;
	/**
	 * @access public
	 * @var boolean
	 */
	public $giveAccess;
	/**
	 * @access public
	 * @var float
	 */
	public $estimatedBudget;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $accessRole;
	/**
	 * @access public
	 * @var boolean
	 */
	public $sendEmail;
	/**
	 * @access public
	 * @var string
	 */
	public $password;
	/**
	 * @access public
	 * @var string
	 */
	public $password2;
	/**
	 * @access public
	 * @var boolean
	 */
	public $requirePwdChange;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $campaignCategory;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $leadSource;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $receivablesAccount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $drAccount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $fxAccount;
	/**
	 * @access public
	 * @var float
	 */
	public $defaultOrderPriority;
	/**
	 * @access public
	 * @var string
	 */
	public $webLead;
	/**
	 * @access public
	 * @var string
	 */
	public $referrer;
	/**
	 * @access public
	 * @var string
	 */
	public $keywords;
	/**
	 * @access public
	 * @var string
	 */
	public $clickStream;
	/**
	 * @access public
	 * @var string
	 */
	public $lastPageVisited;
	/**
	 * @access public
	 * @var integer
	 */
	public $visits;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $firstVisit;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastVisit;
	/**
	 * @access public
	 * @var boolean
	 */
	public $billPay;
	/**
	 * @access public
	 * @var float
	 */
	public $openingBalance;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $openingBalanceDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $openingBalanceAccount;
	/**
	 * @access public
	 * @var CustomerStage
	 */
	public $stage;
	/**
	 * @access public
	 * @var boolean
	 */
	public $emailTransactions;
	/**
	 * @access public
	 * @var boolean
	 */
	public $printTransactions;
	/**
	 * @access public
	 * @var boolean
	 */
	public $faxTransactions;
	/**
	 * @access public
	 * @var boolean
	 */
	public $syncPartnerTeams;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isBudgetApproved;
	/**
	 * @access public
	 * @var GlobalSubscriptionStatus
	 */
	public $globalSubscriptionStatus;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $salesReadiness;
	/**
	 * @access public
	 * @var CustomerSalesTeamList
	 */
	public $salesTeamList;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $buyingReason;
	/**
	 * @access public
	 * @var CustomerDownloadList
	 */
	public $downloadList;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $buyingTimeFrame;
	/**
	 * @access public
	 * @var CustomerAddressbookList
	 */
	public $addressbookList;
	/**
	 * @access public
	 * @var SubscriptionsList
	 */
	public $subscriptionsList;
	/**
	 * @access public
	 * @var ContactAccessRolesList
	 */
	public $contactRolesList;
	/**
	 * @access public
	 * @var CustomerCurrencyList
	 */
	public $currencyList;
	/**
	 * @access public
	 * @var CustomerCreditCardsList
	 */
	public $creditCardsList;
	/**
	 * @access public
	 * @var CustomerPartnersList
	 */
	public $partnersList;
	/**
	 * @access public
	 * @var CustomerGroupPricingList
	 */
	public $groupPricingList;
	/**
	 * @access public
	 * @var CustomerItemPricingList
	 */
	public $itemPricingList;
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
		"customForm" => "RecordRef",
		"entityId" => "string",
		"altName" => "string",
		"isPerson" => "boolean",
		"phoneticName" => "string",
		"salutation" => "string",
		"firstName" => "string",
		"middleName" => "string",
		"lastName" => "string",
		"companyName" => "string",
		"entityStatus" => "RecordRef",
		"parent" => "RecordRef",
		"phone" => "string",
		"fax" => "string",
		"email" => "string",
		"url" => "string",
		"defaultAddress" => "string",
		"isInactive" => "boolean",
		"category" => "RecordRef",
		"title" => "string",
		"printOnCheckAs" => "string",
		"altPhone" => "string",
		"homePhone" => "string",
		"mobilePhone" => "string",
		"altEmail" => "string",
		"language" => "Language",
		"comments" => "string",
		"numberFormat" => "CustomerNumberFormat",
		"negativeNumberFormat" => "CustomerNegativeNumberFormat",
		"dateCreated" => "dateTime",
		"image" => "RecordRef",
		"emailPreference" => "EmailPreference",
		"subsidiary" => "RecordRef",
		"representingSubsidiary" => "RecordRef",
		"salesRep" => "RecordRef",
		"territory" => "RecordRef",
		"contribPct" => "string",
		"partner" => "RecordRef",
		"salesGroup" => "RecordRef",
		"vatRegNumber" => "string",
		"accountNumber" => "string",
		"taxExempt" => "boolean",
		"terms" => "RecordRef",
		"creditLimit" => "float",
		"creditHoldOverride" => "CustomerCreditHoldOverride",
		"monthlyClosing" => "CustomerMonthlyClosing",
		"overrideCurrencyFormat" => "boolean",
		"displaySymbol" => "string",
		"symbolPlacement" => "CurrencySymbolPlacement",
		"balance" => "float",
		"overdueBalance" => "float",
		"daysOverdue" => "integer",
		"unbilledOrders" => "float",
		"consolUnbilledOrders" => "float",
		"consolOverdueBalance" => "float",
		"consolDepositBalance" => "float",
		"consolBalance" => "float",
		"consolAging" => "float",
		"consolDaysOverdue" => "integer",
		"priceLevel" => "RecordRef",
		"currency" => "RecordRef",
		"prefCCProcessor" => "RecordRef",
		"depositBalance" => "float",
		"shipComplete" => "boolean",
		"taxable" => "boolean",
		"taxItem" => "RecordRef",
		"resaleNumber" => "string",
		"aging" => "float",
		"startDate" => "dateTime",
		"endDate" => "dateTime",
		"reminderDays" => "integer",
		"shippingItem" => "RecordRef",
		"thirdPartyAcct" => "string",
		"thirdPartyZipcode" => "string",
		"thirdPartyCountry" => "Country",
		"giveAccess" => "boolean",
		"estimatedBudget" => "float",
		"accessRole" => "RecordRef",
		"sendEmail" => "boolean",
		"password" => "string",
		"password2" => "string",
		"requirePwdChange" => "boolean",
		"campaignCategory" => "RecordRef",
		"leadSource" => "RecordRef",
		"receivablesAccount" => "RecordRef",
		"drAccount" => "RecordRef",
		"fxAccount" => "RecordRef",
		"defaultOrderPriority" => "float",
		"webLead" => "string",
		"referrer" => "string",
		"keywords" => "string",
		"clickStream" => "string",
		"lastPageVisited" => "string",
		"visits" => "integer",
		"firstVisit" => "dateTime",
		"lastVisit" => "dateTime",
		"billPay" => "boolean",
		"openingBalance" => "float",
		"lastModifiedDate" => "dateTime",
		"openingBalanceDate" => "dateTime",
		"openingBalanceAccount" => "RecordRef",
		"stage" => "CustomerStage",
		"emailTransactions" => "boolean",
		"printTransactions" => "boolean",
		"faxTransactions" => "boolean",
		"syncPartnerTeams" => "boolean",
		"isBudgetApproved" => "boolean",
		"globalSubscriptionStatus" => "GlobalSubscriptionStatus",
		"salesReadiness" => "RecordRef",
		"salesTeamList" => "CustomerSalesTeamList",
		"buyingReason" => "RecordRef",
		"downloadList" => "CustomerDownloadList",
		"buyingTimeFrame" => "RecordRef",
		"addressbookList" => "CustomerAddressbookList",
		"subscriptionsList" => "SubscriptionsList",
		"contactRolesList" => "ContactAccessRolesList",
		"currencyList" => "CustomerCurrencyList",
		"creditCardsList" => "CustomerCreditCardsList",
		"partnersList" => "CustomerPartnersList",
		"groupPricingList" => "CustomerGroupPricingList",
		"itemPricingList" => "CustomerItemPricingList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
