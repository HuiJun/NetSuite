<?php

class SupportCase extends Record {
	/**
	 * @access public
	 * @var string
	 */
	public $escalationMessage;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastReopenedDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $endDate;
	/**
	 * @access public
	 * @var string
	 */
	public $incomingMessage;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $insertSolution;
	/**
	 * @access public
	 * @var string
	 */
	public $outgoingMessage;
	/**
	 * @access public
	 * @var string
	 */
	public $searchSolution;
	/**
	 * @access public
	 * @var boolean
	 */
	public $emailForm;
	/**
	 * @access public
	 * @var string
	 */
	public $newSolutionFromMsg;
	/**
	 * @access public
	 * @var boolean
	 */
	public $internalOnly;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var string
	 */
	public $title;
	/**
	 * @access public
	 * @var string
	 */
	public $caseNumber;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $startDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastMessageDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $company;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $profile;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $contact;
	/**
	 * @access public
	 * @var string
	 */
	public $email;
	/**
	 * @access public
	 * @var string
	 */
	public $phone;
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
	public $serialNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $inboundEmail;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $issue;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $status;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $priority;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $origin;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $category;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $assigned;
	/**
	 * @access public
	 * @var boolean
	 */
	public $helpDesk;
	/**
	 * @access public
	 * @var EmailEmployeesList
	 */
	public $emailEmployeesList;
	/**
	 * @access public
	 * @var SupportCaseEscalateToList
	 */
	public $escalateToList;
	/**
	 * @access public
	 * @var SupportCaseTimeItemList
	 */
	public $timeItemList;
	/**
	 * @access public
	 * @var SupportCaseSolutionsList
	 */
	public $solutionsList;
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
		"escalationMessage" => "string",
		"lastReopenedDate" => "dateTime",
		"endDate" => "dateTime",
		"incomingMessage" => "string",
		"insertSolution" => "RecordRef",
		"outgoingMessage" => "string",
		"searchSolution" => "string",
		"emailForm" => "boolean",
		"newSolutionFromMsg" => "string",
		"internalOnly" => "boolean",
		"customForm" => "RecordRef",
		"title" => "string",
		"caseNumber" => "string",
		"startDate" => "dateTime",
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"lastMessageDate" => "dateTime",
		"company" => "RecordRef",
		"profile" => "RecordRef",
		"subsidiary" => "RecordRef",
		"contact" => "RecordRef",
		"email" => "string",
		"phone" => "string",
		"product" => "RecordRef",
		"module" => "RecordRef",
		"item" => "RecordRef",
		"serialNumber" => "RecordRef",
		"inboundEmail" => "string",
		"issue" => "RecordRef",
		"status" => "RecordRef",
		"isInactive" => "boolean",
		"priority" => "RecordRef",
		"origin" => "RecordRef",
		"category" => "RecordRef",
		"assigned" => "RecordRef",
		"helpDesk" => "boolean",
		"emailEmployeesList" => "EmailEmployeesList",
		"escalateToList" => "SupportCaseEscalateToList",
		"timeItemList" => "SupportCaseTimeItemList",
		"solutionsList" => "SupportCaseSolutionsList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
