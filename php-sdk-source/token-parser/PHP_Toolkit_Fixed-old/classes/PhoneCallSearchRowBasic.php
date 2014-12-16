<?php

class PhoneCallSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $accessLevel;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $assigned;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $company;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $completedDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $contact;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $markdone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $message;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $owner;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $phone;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $priority;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $startTime;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $transaction;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"accessLevel" => "SearchColumnStringField[]",
		"assigned" => "SearchColumnSelectField[]",
		"company" => "SearchColumnSelectField[]",
		"completedDate" => "SearchColumnDateField[]",
		"contact" => "SearchColumnSelectField[]",
		"createdDate" => "SearchColumnDateField[]",
		"endDate" => "SearchColumnDateField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"markdone" => "SearchColumnStringField[]",
		"message" => "SearchColumnStringField[]",
		"owner" => "SearchColumnSelectField[]",
		"phone" => "SearchColumnStringField[]",
		"priority" => "SearchColumnEnumSelectField[]",
		"startDate" => "SearchColumnDateField[]",
		"startTime" => "SearchColumnDateField[]",
		"status" => "SearchColumnEnumSelectField[]",
		"title" => "SearchColumnStringField[]",
		"transaction" => "SearchColumnSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
