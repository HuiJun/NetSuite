<?php

class ProjectTaskSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $actualWork;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $assignee;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $company;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $constraintType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $contact;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $cost;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $costBase;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $costBaseBaseline;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $costBaseline;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $costBaseVariance;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $costVariance;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $costVariancePercent;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $endDateBaseline;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $endDateVariance;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estimatedWork;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estimatedWorkBaseline;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estimatedWorkVariance;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estimatedWorkVariancePercent;
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
	 * @var SearchDateField
	 */
	public $finishByDate;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $id;
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
	public $isMilestone;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isSummaryTask;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $nonBillableTask;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $owner;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $parent;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $percentWorkComplete;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $predecessor;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $predecessors;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $priority;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $remainingWork;
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
	 * @var SearchDoubleField
	 */
	public $startDateVariance;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $successor;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"actualWork" => "SearchDoubleField",
		"assignee" => "SearchMultiSelectField",
		"company" => "SearchMultiSelectField",
		"constraintType" => "SearchEnumMultiSelectField",
		"contact" => "SearchMultiSelectField",
		"cost" => "SearchDoubleField",
		"costBase" => "SearchDoubleField",
		"costBaseBaseline" => "SearchDoubleField",
		"costBaseline" => "SearchDoubleField",
		"costBaseVariance" => "SearchDoubleField",
		"costVariance" => "SearchDoubleField",
		"costVariancePercent" => "SearchDoubleField",
		"createdDate" => "SearchDateField",
		"endDate" => "SearchDateField",
		"endDateBaseline" => "SearchDateField",
		"endDateVariance" => "SearchDoubleField",
		"estimatedWork" => "SearchDoubleField",
		"estimatedWorkBaseline" => "SearchDoubleField",
		"estimatedWorkVariance" => "SearchDoubleField",
		"estimatedWorkVariancePercent" => "SearchDoubleField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"finishByDate" => "SearchDateField",
		"id" => "SearchLongField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isMilestone" => "SearchBooleanField",
		"isSummaryTask" => "SearchBooleanField",
		"lastModifiedDate" => "SearchDateField",
		"nonBillableTask" => "SearchBooleanField",
		"owner" => "SearchMultiSelectField",
		"parent" => "SearchMultiSelectField",
		"percentWorkComplete" => "SearchDoubleField",
		"predecessor" => "SearchMultiSelectField",
		"predecessors" => "SearchStringField",
		"priority" => "SearchEnumMultiSelectField",
		"remainingWork" => "SearchDoubleField",
		"startDate" => "SearchDateField",
		"startDateBaseline" => "SearchDateField",
		"startDateVariance" => "SearchDoubleField",
		"status" => "SearchEnumMultiSelectField",
		"successor" => "SearchMultiSelectField",
		"title" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
