<?php

class Contact extends Record {
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
	 * @var RecordRef
	 */
	public $contactSource;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $company;
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
	public $title;
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
	public $defaultAddress;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isPrivate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var string
	 */
	public $phoneticName;
	/**
	 * @access public
	 * @var CategoryList
	 */
	public $categoryList;
	/**
	 * @access public
	 * @var string
	 */
	public $altEmail;
	/**
	 * @access public
	 * @var string
	 */
	public $officePhone;
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
	 * @var RecordRef
	 */
	public $supervisor;
	/**
	 * @access public
	 * @var string
	 */
	public $supervisorPhone;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $assistant;
	/**
	 * @access public
	 * @var string
	 */
	public $assistantPhone;
	/**
	 * @access public
	 * @var string
	 */
	public $comments;
	/**
	 * @access public
	 * @var GlobalSubscriptionStatus
	 */
	public $globalSubscriptionStatus;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $image;
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
	 * @var dateTime
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var ContactAddressbookList
	 */
	public $addressbookList;
	/**
	 * @access public
	 * @var SubscriptionsList
	 */
	public $subscriptionsList;
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
		"contactSource" => "RecordRef",
		"company" => "RecordRef",
		"salutation" => "string",
		"firstName" => "string",
		"middleName" => "string",
		"lastName" => "string",
		"title" => "string",
		"phone" => "string",
		"fax" => "string",
		"email" => "string",
		"defaultAddress" => "string",
		"isPrivate" => "boolean",
		"isInactive" => "boolean",
		"subsidiary" => "RecordRef",
		"phoneticName" => "string",
		"categoryList" => "CategoryList",
		"altEmail" => "string",
		"officePhone" => "string",
		"homePhone" => "string",
		"mobilePhone" => "string",
		"supervisor" => "RecordRef",
		"supervisorPhone" => "string",
		"assistant" => "RecordRef",
		"assistantPhone" => "string",
		"comments" => "string",
		"globalSubscriptionStatus" => "GlobalSubscriptionStatus",
		"image" => "RecordRef",
		"billPay" => "boolean",
		"dateCreated" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"addressbookList" => "ContactAddressbookList",
		"subscriptionsList" => "SubscriptionsList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
