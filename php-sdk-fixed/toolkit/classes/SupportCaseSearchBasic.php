<?php

class SupportCaseSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $assigned;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $awaitingReply;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $caseNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $category;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $closedDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $company;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $contact;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $email;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $escalateTo;
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
	public $helpDesk;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $inboundEmail;
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
	public $isInactive;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $issue;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $lastMessage;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastReopenedDate;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $locked;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $message;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $messageAuthor;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $messageDate;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $messageType;
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
	 * @var SearchMultiSelectField
	 */
	public $origin;
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
	public $profile;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $serialNumber;
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
	 * @var SearchStringField
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"assigned" => "SearchMultiSelectField",
		"awaitingReply" => "SearchBooleanField",
		"caseNumber" => "SearchStringField",
		"category" => "SearchMultiSelectField",
		"closedDate" => "SearchDateField",
		"company" => "SearchStringField",
		"contact" => "SearchStringField",
		"createdDate" => "SearchDateField",
		"email" => "SearchStringField",
		"escalateTo" => "SearchMultiSelectField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"helpDesk" => "SearchBooleanField",
		"inboundEmail" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"issue" => "SearchMultiSelectField",
		"item" => "SearchMultiSelectField",
		"lastMessage" => "SearchBooleanField",
		"lastModifiedDate" => "SearchDateField",
		"lastReopenedDate" => "SearchDateField",
		"locked" => "SearchBooleanField",
		"message" => "SearchStringField",
		"messageAuthor" => "SearchMultiSelectField",
		"messageDate" => "SearchDateField",
		"messageType" => "SearchBooleanField",
		"module" => "SearchMultiSelectField",
		"number" => "SearchLongField",
		"origin" => "SearchMultiSelectField",
		"priority" => "SearchMultiSelectField",
		"product" => "SearchMultiSelectField",
		"profile" => "SearchMultiSelectField",
		"serialNumber" => "SearchStringField",
		"stage" => "SearchEnumMultiSelectField",
		"startDate" => "SearchDateField",
		"status" => "SearchMultiSelectField",
		"subsidiary" => "SearchMultiSelectField",
		"title" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
