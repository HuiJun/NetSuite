<?php

class JobSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $accountNumber;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $actualTime;
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
	 * @var SearchBooleanField
	 */
	public $allocatePayrollExpenses;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $allowAllResourcesForTasks;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $allowExpenses;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $allowTime;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $applyProjectExpenseTypeToAll;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $attention;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $billingSchedule;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $calculatedEndDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $calculatedEndDateBaseline;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $category;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $city;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $comments;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $contact;
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
	 * @var SearchMultiSelectField
	 */
	public $customer;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $dateCreated;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $email;
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
	 * @var SearchDoubleField
	 */
	public $estCost;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $estEndDate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estimatedGrossProfit;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estimatedGrossProfitPercent;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estimatedLaborCost;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estimatedLaborCostBaseline;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estimatedLaborRevenue;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estimatedTime;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estimatedTimeOverride;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estimatedTimeOverrideBaseline;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estRevenue;
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
	public $giveAccess;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $globalSubscriptionStatus;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $image;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $includeCrmTasksInTotals;
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
	public $isExemptTime;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isProductiveTime;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isUtilizedTime;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $jobBillingType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $jobItem;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $jobPrice;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $jobResource;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $jobResourceRole;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $language;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastBaselineDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $level;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $limitTimeToAssignees;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $materializeTime;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $parent;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $pctComplete;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $percentTimeComplete;
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
	 * @var SearchDateField
	 */
	public $projectedEndDateBaseline;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $projectExpenseType;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $startDateBaseline;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $state;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $timeRemaining;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $type;
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
		"actualTime" => "SearchDoubleField",
		"address" => "SearchStringField",
		"addressee" => "SearchStringField",
		"addressLabel" => "SearchStringField",
		"addressPhone" => "SearchStringField",
		"allocatePayrollExpenses" => "SearchBooleanField",
		"allowAllResourcesForTasks" => "SearchBooleanField",
		"allowExpenses" => "SearchBooleanField",
		"allowTime" => "SearchBooleanField",
		"applyProjectExpenseTypeToAll" => "SearchBooleanField",
		"attention" => "SearchStringField",
		"billingSchedule" => "SearchMultiSelectField",
		"calculatedEndDate" => "SearchDateField",
		"calculatedEndDateBaseline" => "SearchDateField",
		"category" => "SearchMultiSelectField",
		"city" => "SearchStringField",
		"comments" => "SearchStringField",
		"contact" => "SearchStringField",
		"country" => "SearchEnumMultiSelectField",
		"county" => "SearchStringField",
		"customer" => "SearchMultiSelectField",
		"dateCreated" => "SearchDateField",
		"email" => "SearchStringField",
		"endDate" => "SearchDateField",
		"entityId" => "SearchStringField",
		"estCost" => "SearchDoubleField",
		"estEndDate" => "SearchDateField",
		"estimatedGrossProfit" => "SearchDoubleField",
		"estimatedGrossProfitPercent" => "SearchDoubleField",
		"estimatedLaborCost" => "SearchDoubleField",
		"estimatedLaborCostBaseline" => "SearchDoubleField",
		"estimatedLaborRevenue" => "SearchDoubleField",
		"estimatedTime" => "SearchDoubleField",
		"estimatedTimeOverride" => "SearchDoubleField",
		"estimatedTimeOverrideBaseline" => "SearchDoubleField",
		"estRevenue" => "SearchDoubleField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"fax" => "SearchStringField",
		"giveAccess" => "SearchBooleanField",
		"globalSubscriptionStatus" => "SearchEnumMultiSelectField",
		"image" => "SearchStringField",
		"includeCrmTasksInTotals" => "SearchBooleanField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isDefaultBilling" => "SearchBooleanField",
		"isDefaultShipping" => "SearchBooleanField",
		"isExemptTime" => "SearchBooleanField",
		"isInactive" => "SearchBooleanField",
		"isProductiveTime" => "SearchBooleanField",
		"isUtilizedTime" => "SearchBooleanField",
		"jobBillingType" => "SearchEnumMultiSelectField",
		"jobItem" => "SearchMultiSelectField",
		"jobPrice" => "SearchDoubleField",
		"jobResource" => "SearchMultiSelectField",
		"jobResourceRole" => "SearchMultiSelectField",
		"language" => "SearchEnumMultiSelectField",
		"lastBaselineDate" => "SearchDateField",
		"lastModifiedDate" => "SearchDateField",
		"level" => "SearchEnumMultiSelectField",
		"limitTimeToAssignees" => "SearchBooleanField",
		"materializeTime" => "SearchBooleanField",
		"parent" => "SearchMultiSelectField",
		"pctComplete" => "SearchLongField",
		"percentTimeComplete" => "SearchLongField",
		"permission" => "SearchEnumMultiSelectField",
		"phone" => "SearchStringField",
		"phoneticName" => "SearchStringField",
		"projectedEndDateBaseline" => "SearchDateField",
		"projectExpenseType" => "SearchMultiSelectField",
		"startDate" => "SearchDateField",
		"startDateBaseline" => "SearchDateField",
		"state" => "SearchStringField",
		"status" => "SearchMultiSelectField",
		"subsidiary" => "SearchMultiSelectField",
		"timeRemaining" => "SearchDoubleField",
		"type" => "SearchMultiSelectField",
		"zipCode" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
