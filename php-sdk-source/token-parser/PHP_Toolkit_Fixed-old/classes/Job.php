<?php

class Job extends Record {
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
	 * @var string
	 */
	public $companyName;
	/**
	 * @access public
	 * @var string
	 */
	public $phoneticName;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $entityStatus;
	/**
	 * @access public
	 * @var string
	 */
	public $defaultAddress;
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
	 * @var dateTime
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $billPay;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $dateCreated;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $category;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $workplace;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $language;
	/**
	 * @access public
	 * @var string
	 */
	public $comments;
	/**
	 * @access public
	 * @var string
	 */
	public $accountNumber;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $currency;
	/**
	 * @access public
	 * @var float
	 */
	public $fxRate;
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
	 * @var string
	 */
	public $phone;
	/**
	 * @access public
	 * @var string
	 */
	public $altPhone;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $calculatedEndDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $calculatedEndDateBaseline;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $startDateBaseline;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $projectedEndDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $projectedEndDateBaseline;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastBaselineDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $jobType;
	/**
	 * @access public
	 * @var float
	 */
	public $percentComplete;
	/**
	 * @access public
	 * @var float
	 */
	public $estimatedCost;
	/**
	 * @access public
	 * @var float
	 */
	public $estimatedRevenue;
	/**
	 * @access public
	 * @var Duration
	 */
	public $estimatedTime;
	/**
	 * @access public
	 * @var Duration
	 */
	public $estimatedTimeOverride;
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
	 * @var EmailPreference
	 */
	public $emailPreference;
	/**
	 * @access public
	 * @var float
	 */
	public $openingBalance;
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
	 * @var RecordRef
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var JobBillingType
	 */
	public $jobBillingType;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $billingSchedule;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $jobItem;
	/**
	 * @access public
	 * @var float
	 */
	public $percentTimeComplete;
	/**
	 * @access public
	 * @var Duration
	 */
	public $actualTime;
	/**
	 * @access public
	 * @var boolean
	 */
	public $allowTime;
	/**
	 * @access public
	 * @var Duration
	 */
	public $timeRemaining;
	/**
	 * @access public
	 * @var boolean
	 */
	public $limitTimeToAssignees;
	/**
	 * @access public
	 * @var float
	 */
	public $estimatedLaborCost;
	/**
	 * @access public
	 * @var float
	 */
	public $estimatedLaborCostBaseline;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $estimateRevRecTemplate;
	/**
	 * @access public
	 * @var float
	 */
	public $estimatedLaborRevenue;
	/**
	 * @access public
	 * @var float
	 */
	public $estimatedGrossProfit;
	/**
	 * @access public
	 * @var float
	 */
	public $estimatedGrossProfitPercent;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $projectExpenseType;
	/**
	 * @access public
	 * @var boolean
	 */
	public $applyProjectExpenseTypeToAll;
	/**
	 * @access public
	 * @var boolean
	 */
	public $allowAllResourcesForTasks;
	/**
	 * @access public
	 * @var float
	 */
	public $jobPrice;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isUtilizedTime;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isProductiveTime;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isExemptTime;
	/**
	 * @access public
	 * @var boolean
	 */
	public $materializeTime;
	/**
	 * @access public
	 * @var boolean
	 */
	public $allowExpenses;
	/**
	 * @access public
	 * @var boolean
	 */
	public $allocatePayrollExpenses;
	/**
	 * @access public
	 * @var boolean
	 */
	public $includeCrmTasksInTotals;
	/**
	 * @access public
	 * @var GlobalSubscriptionStatus
	 */
	public $globalSubscriptionStatus;
	/**
	 * @access public
	 * @var JobResourcesList
	 */
	public $jobResourcesList;
	/**
	 * @access public
	 * @var JobPlStatementList
	 */
	public $plStatementList;
	/**
	 * @access public
	 * @var JobAddressbookList
	 */
	public $addressbookList;
	/**
	 * @access public
	 * @var JobMilestonesList
	 */
	public $milestonesList;
	/**
	 * @access public
	 * @var JobCreditCardsList
	 */
	public $creditCardsList;
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
		"companyName" => "string",
		"phoneticName" => "string",
		"entityStatus" => "RecordRef",
		"defaultAddress" => "string",
		"parent" => "RecordRef",
		"isInactive" => "boolean",
		"lastModifiedDate" => "dateTime",
		"billPay" => "boolean",
		"dateCreated" => "dateTime",
		"category" => "RecordRef",
		"workplace" => "RecordRef",
		"language" => "RecordRef",
		"comments" => "string",
		"accountNumber" => "string",
		"currency" => "RecordRef",
		"fxRate" => "float",
		"startDate" => "dateTime",
		"endDate" => "dateTime",
		"phone" => "string",
		"altPhone" => "string",
		"calculatedEndDate" => "dateTime",
		"calculatedEndDateBaseline" => "dateTime",
		"startDateBaseline" => "dateTime",
		"projectedEndDate" => "dateTime",
		"projectedEndDateBaseline" => "dateTime",
		"lastBaselineDate" => "dateTime",
		"jobType" => "RecordRef",
		"percentComplete" => "float",
		"estimatedCost" => "float",
		"estimatedRevenue" => "float",
		"estimatedTime" => "Duration",
		"estimatedTimeOverride" => "Duration",
		"fax" => "string",
		"email" => "string",
		"emailPreference" => "EmailPreference",
		"openingBalance" => "float",
		"openingBalanceDate" => "dateTime",
		"openingBalanceAccount" => "RecordRef",
		"subsidiary" => "RecordRef",
		"jobBillingType" => "JobBillingType",
		"billingSchedule" => "RecordRef",
		"jobItem" => "RecordRef",
		"percentTimeComplete" => "float",
		"actualTime" => "Duration",
		"allowTime" => "boolean",
		"timeRemaining" => "Duration",
		"limitTimeToAssignees" => "boolean",
		"estimatedLaborCost" => "float",
		"estimatedLaborCostBaseline" => "float",
		"estimateRevRecTemplate" => "RecordRef",
		"estimatedLaborRevenue" => "float",
		"estimatedGrossProfit" => "float",
		"estimatedGrossProfitPercent" => "float",
		"projectExpenseType" => "RecordRef",
		"applyProjectExpenseTypeToAll" => "boolean",
		"allowAllResourcesForTasks" => "boolean",
		"jobPrice" => "float",
		"isUtilizedTime" => "boolean",
		"isProductiveTime" => "boolean",
		"isExemptTime" => "boolean",
		"materializeTime" => "boolean",
		"allowExpenses" => "boolean",
		"allocatePayrollExpenses" => "boolean",
		"includeCrmTasksInTotals" => "boolean",
		"globalSubscriptionStatus" => "GlobalSubscriptionStatus",
		"jobResourcesList" => "JobResourcesList",
		"plStatementList" => "JobPlStatementList",
		"addressbookList" => "JobAddressbookList",
		"milestonesList" => "JobMilestonesList",
		"creditCardsList" => "JobCreditCardsList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
