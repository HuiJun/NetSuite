<?php

class IssueSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $ageInMonths;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $assigned;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $buildBroken;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $buildBrokenName;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $buildFixed;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $buildFixedName;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $buildTarget;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $buildTargetName;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $caseCount;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $caseNumber;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $closedDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $dateReleased;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $details;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $duplicateOf;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $eFix;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $employeeOrTeam;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $eventStatus;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalAbstract;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalDetails;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalFixedIn;
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
	 * @var SearchMultiSelectField
	 */
	public $externalStatus;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $fixed;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $fixedBy;
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
	public $isOwner;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isReviewed;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isShowStopper;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $issueAbstract;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $issueNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $module;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $number;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $originalFixedIn;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $priority;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $product;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $productTeam;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $relatedIssue;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $relationship;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $relationshipComment;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $reportedBy;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $reproduce;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $resolved;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $resolvedBy;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $reviewer;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $severity;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $source;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $tags;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $tracking;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $type;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $userType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $versionBroken;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $versionFixed;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $versionTarget;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"ageInMonths" => "SearchLongField",
		"assigned" => "SearchMultiSelectField",
		"buildBroken" => "SearchMultiSelectField",
		"buildBrokenName" => "SearchStringField",
		"buildFixed" => "SearchMultiSelectField",
		"buildFixedName" => "SearchStringField",
		"buildTarget" => "SearchMultiSelectField",
		"buildTargetName" => "SearchStringField",
		"caseCount" => "SearchLongField",
		"caseNumber" => "SearchStringField",
		"closedDate" => "SearchDateField",
		"createdDate" => "SearchDateField",
		"dateReleased" => "SearchDateField",
		"details" => "SearchStringField",
		"duplicateOf" => "SearchMultiSelectField",
		"eFix" => "SearchBooleanField",
		"employeeOrTeam" => "SearchMultiSelectField",
		"eventStatus" => "SearchEnumMultiSelectField",
		"externalAbstract" => "SearchStringField",
		"externalDetails" => "SearchStringField",
		"externalFixedIn" => "SearchMultiSelectField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"externalStatus" => "SearchMultiSelectField",
		"fixed" => "SearchDateField",
		"fixedBy" => "SearchMultiSelectField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isOwner" => "SearchBooleanField",
		"isReviewed" => "SearchBooleanField",
		"isShowStopper" => "SearchBooleanField",
		"issueAbstract" => "SearchStringField",
		"issueNumber" => "SearchStringField",
		"item" => "SearchMultiSelectField",
		"lastModifiedDate" => "SearchDateField",
		"module" => "SearchMultiSelectField",
		"number" => "SearchLongField",
		"originalFixedIn" => "SearchStringField",
		"priority" => "SearchMultiSelectField",
		"product" => "SearchMultiSelectField",
		"productTeam" => "SearchMultiSelectField",
		"relatedIssue" => "SearchMultiSelectField",
		"relationship" => "SearchEnumMultiSelectField",
		"relationshipComment" => "SearchStringField",
		"reportedBy" => "SearchMultiSelectField",
		"reproduce" => "SearchMultiSelectField",
		"resolved" => "SearchDateField",
		"resolvedBy" => "SearchMultiSelectField",
		"reviewer" => "SearchMultiSelectField",
		"severity" => "SearchMultiSelectField",
		"source" => "SearchEnumMultiSelectField",
		"status" => "SearchMultiSelectField",
		"tags" => "SearchMultiSelectField",
		"tracking" => "SearchBooleanField",
		"type" => "SearchMultiSelectField",
		"userType" => "SearchMultiSelectField",
		"versionBroken" => "SearchMultiSelectField",
		"versionFixed" => "SearchMultiSelectField",
		"versionTarget" => "SearchMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
