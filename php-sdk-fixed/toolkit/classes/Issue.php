<?php

class Issue extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var string
	 */
	public $issueNumber;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $issueType;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $product;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $module;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $productTeam;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $source;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $reportedBy;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $reproduce;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $versionBroken;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $buildBroken;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $versionTarget;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $buildTarget;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $versionFixed;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $buildFixed;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $severity;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $priority;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isShowStopper;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $assigned;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $reviewer;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isReviewed;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $issueStatus;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $issueTagsList;
	/**
	 * @access public
	 * @var string
	 */
	public $issueAbstract;
	/**
	 * @access public
	 * @var string
	 */
	public $newDetails;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isOwner;
	/**
	 * @access public
	 * @var IssueTrackCode
	 */
	public $trackCode;
	/**
	 * @access public
	 * @var boolean
	 */
	public $emailAssignee;
	/**
	 * @access public
	 * @var EmailEmployeesList
	 */
	public $emailEmployeesList;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $emailCellsList;
	/**
	 * @access public
	 * @var string
	 */
	public $externalAbstract;
	/**
	 * @access public
	 * @var string
	 */
	public $externalDetails;
	/**
	 * @access public
	 * @var IssueVersionList
	 */
	public $brokenInVersionList;
	/**
	 * @access public
	 * @var IssueVersionList
	 */
	public $targetVersionList;
	/**
	 * @access public
	 * @var IssueVersionList
	 */
	public $fixedInVersionList;
	/**
	 * @access public
	 * @var IssueRelatedIssuesList
	 */
	public $relatedIssuesList;
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
		"issueNumber" => "string",
		"createdDate" => "dateTime",
		"issueType" => "RecordRef",
		"product" => "RecordRef",
		"module" => "RecordRef",
		"item" => "RecordRef",
		"productTeam" => "RecordRef",
		"source" => "RecordRef",
		"reportedBy" => "RecordRef",
		"reproduce" => "RecordRef",
		"versionBroken" => "RecordRef",
		"buildBroken" => "RecordRef",
		"versionTarget" => "RecordRef",
		"buildTarget" => "RecordRef",
		"versionFixed" => "RecordRef",
		"buildFixed" => "RecordRef",
		"severity" => "RecordRef",
		"priority" => "RecordRef",
		"isShowStopper" => "boolean",
		"assigned" => "RecordRef",
		"reviewer" => "RecordRef",
		"isReviewed" => "boolean",
		"issueStatus" => "RecordRef",
		"lastModifiedDate" => "dateTime",
		"issueTagsList" => "RecordRefList",
		"issueAbstract" => "string",
		"newDetails" => "string",
		"isOwner" => "boolean",
		"trackCode" => "IssueTrackCode",
		"emailAssignee" => "boolean",
		"emailEmployeesList" => "EmailEmployeesList",
		"emailCellsList" => "RecordRefList",
		"externalAbstract" => "string",
		"externalDetails" => "string",
		"brokenInVersionList" => "IssueVersionList",
		"targetVersionList" => "IssueVersionList",
		"fixedInVersionList" => "IssueVersionList",
		"relatedIssuesList" => "IssueRelatedIssuesList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
