<?php

class EmployeeSearchBasic extends SearchRecordBasic {
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
	public $alienNumber;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $anniversary;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $approvalLimit;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $approver;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $attention;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $authWorkDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $billAddress;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $billingClass;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $birthDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $birthDay;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $cContribution;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $city;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $class;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $comments;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $commissionPlan;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $concurrentWebServicesUser;
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
	 * @var SearchDateField
	 */
	public $dateCreated;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $deduction;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $department;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $earning;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $education;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $eligibleForCommission;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $email;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $employeeStatus;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $employeeType;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $employeeTypeKpi;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $entityId;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $ethnicity;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $expenseLimit;
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
	 * @var SearchStringField
	 */
	public $firstName;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $gender;
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
	 * @var SearchDateField
	 */
	public $hireDate;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $I9Verified;
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
	public $isJobResource;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isTemplate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $jobDescription;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $laborCost;
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
	public $lastPaidDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastReviewDate;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $level;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $maritalStatus;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $middleName;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $nextReviewDate;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $offlineAccess;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $payFrequency;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $permChangeDate;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $permission;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $permissionChange;
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
	 * @var SearchDoubleField
	 */
	public $primaryEarningAmount;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $primaryEarningItem;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $primaryEarningType;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $purchaseOrderApprovalLimit;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $purchaseOrderApprover;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $purchaseOrderLimit;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $releaseDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $residentStatus;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $role;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $roleChange;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $roleChangeDate;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $salesRep;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $salesRole;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $salutation;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $socialSecurityNumber;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $state;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $supervisor;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $supportRep;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $timeApprover;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $usePerquest;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $useTimeData;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $visaExpDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $visaType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $withholding;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $workCalendar;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $workplace;
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
		"address" => "SearchStringField",
		"addressee" => "SearchStringField",
		"addressLabel" => "SearchStringField",
		"addressPhone" => "SearchStringField",
		"alienNumber" => "SearchStringField",
		"anniversary" => "SearchDateField",
		"approvalLimit" => "SearchDoubleField",
		"approver" => "SearchMultiSelectField",
		"attention" => "SearchStringField",
		"authWorkDate" => "SearchDateField",
		"billAddress" => "SearchStringField",
		"billingClass" => "SearchMultiSelectField",
		"birthDate" => "SearchDateField",
		"birthDay" => "SearchDateField",
		"cContribution" => "SearchMultiSelectField",
		"city" => "SearchStringField",
		"class" => "SearchMultiSelectField",
		"comments" => "SearchStringField",
		"commissionPlan" => "SearchMultiSelectField",
		"concurrentWebServicesUser" => "SearchBooleanField",
		"country" => "SearchEnumMultiSelectField",
		"county" => "SearchStringField",
		"dateCreated" => "SearchDateField",
		"deduction" => "SearchMultiSelectField",
		"department" => "SearchMultiSelectField",
		"earning" => "SearchMultiSelectField",
		"education" => "SearchMultiSelectField",
		"eligibleForCommission" => "SearchBooleanField",
		"email" => "SearchStringField",
		"employeeStatus" => "SearchMultiSelectField",
		"employeeType" => "SearchMultiSelectField",
		"employeeTypeKpi" => "SearchBooleanField",
		"entityId" => "SearchStringField",
		"ethnicity" => "SearchMultiSelectField",
		"expenseLimit" => "SearchDoubleField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"fax" => "SearchStringField",
		"firstName" => "SearchStringField",
		"gender" => "SearchEnumMultiSelectField",
		"giveAccess" => "SearchBooleanField",
		"globalSubscriptionStatus" => "SearchEnumMultiSelectField",
		"group" => "SearchMultiSelectField",
		"hireDate" => "SearchDateField",
		"I9Verified" => "SearchBooleanField",
		"image" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isDefaultBilling" => "SearchBooleanField",
		"isDefaultShipping" => "SearchBooleanField",
		"isInactive" => "SearchBooleanField",
		"isJobResource" => "SearchBooleanField",
		"isTemplate" => "SearchBooleanField",
		"jobDescription" => "SearchStringField",
		"laborCost" => "SearchDoubleField",
		"language" => "SearchEnumMultiSelectField",
		"lastModifiedDate" => "SearchDateField",
		"lastName" => "SearchStringField",
		"lastPaidDate" => "SearchDateField",
		"lastReviewDate" => "SearchDateField",
		"level" => "SearchEnumMultiSelectField",
		"location" => "SearchMultiSelectField",
		"maritalStatus" => "SearchMultiSelectField",
		"middleName" => "SearchStringField",
		"nextReviewDate" => "SearchDateField",
		"offlineAccess" => "SearchBooleanField",
		"payFrequency" => "SearchEnumMultiSelectField",
		"permChangeDate" => "SearchDateField",
		"permission" => "SearchEnumMultiSelectField",
		"permissionChange" => "SearchEnumMultiSelectField",
		"phone" => "SearchStringField",
		"phoneticName" => "SearchStringField",
		"primaryEarningAmount" => "SearchDoubleField",
		"primaryEarningItem" => "SearchStringField",
		"primaryEarningType" => "SearchStringField",
		"purchaseOrderApprovalLimit" => "SearchDoubleField",
		"purchaseOrderApprover" => "SearchMultiSelectField",
		"purchaseOrderLimit" => "SearchDoubleField",
		"releaseDate" => "SearchDateField",
		"residentStatus" => "SearchMultiSelectField",
		"role" => "SearchMultiSelectField",
		"roleChange" => "SearchMultiSelectField",
		"roleChangeDate" => "SearchDateField",
		"salesRep" => "SearchBooleanField",
		"salesRole" => "SearchMultiSelectField",
		"salutation" => "SearchStringField",
		"socialSecurityNumber" => "SearchStringField",
		"state" => "SearchStringField",
		"subsidiary" => "SearchMultiSelectField",
		"supervisor" => "SearchMultiSelectField",
		"supportRep" => "SearchBooleanField",
		"timeApprover" => "SearchMultiSelectField",
		"title" => "SearchStringField",
		"usePerquest" => "SearchBooleanField",
		"useTimeData" => "SearchBooleanField",
		"visaExpDate" => "SearchDateField",
		"visaType" => "SearchMultiSelectField",
		"withholding" => "SearchMultiSelectField",
		"workCalendar" => "SearchMultiSelectField",
		"workplace" => "SearchMultiSelectField",
		"zipCode" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
