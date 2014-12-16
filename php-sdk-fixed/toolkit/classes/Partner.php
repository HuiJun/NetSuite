<?php

class Partner extends Record {
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
	public $partnerCode;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isPerson;
	/**
	 * @access public
	 * @var string
	 */
	public $phoneticName;
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
	public $companyName;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $parent;
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
	public $url;
	/**
	 * @access public
	 * @var string
	 */
	public $defaultAddress;
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
	 * @var dateTime
	 */
	public $dateCreated;
	/**
	 * @access public
	 * @var GlobalSubscriptionStatus
	 */
	public $globalSubscriptionStatus;
	/**
	 * @access public
	 * @var string
	 */
	public $referringUrl;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $roleList;
	/**
	 * @access public
	 * @var CategoryList
	 */
	public $categoryList;
	/**
	 * @access public
	 * @var string
	 */
	public $title;
	/**
	 * @access public
	 * @var string
	 */
	public $printOnCheckAs;
	/**
	 * @access public
	 * @var string
	 */
	public $taxIdNum;
	/**
	 * @access public
	 * @var string
	 */
	public $vatRegNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $comments;
	/**
	 * @access public
	 * @var string
	 */
	public $bcn;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $image;
	/**
	 * @access public
	 * @var TaxFractionUnit
	 */
	public $taxFractionUnit;
	/**
	 * @access public
	 * @var EmailPreference
	 */
	public $emailPreference;
	/**
	 * @access public
	 * @var TaxRounding
	 */
	public $taxRounding;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $department;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $location;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $class;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
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
	 * @var string
	 */
	public $altEmail;
	/**
	 * @access public
	 * @var boolean
	 */
	public $giveAccess;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $accessRole;
	/**
	 * @access public
	 * @var boolean
	 */
	public $sendEmail;
	/**
	 * @access public
	 * @var string
	 */
	public $password;
	/**
	 * @access public
	 * @var string
	 */
	public $password2;
	/**
	 * @access public
	 * @var boolean
	 */
	public $requirePwdChange;
	/**
	 * @access public
	 * @var boolean
	 */
	public $subPartnerLogin;
	/**
	 * @access public
	 * @var string
	 */
	public $loginAs;
	/**
	 * @access public
	 * @var boolean
	 */
	public $eligibleForCommission;
	/**
	 * @access public
	 * @var ContactAccessRolesList
	 */
	public $contactRolesList;
	/**
	 * @access public
	 * @var PartnerPromoCodeList
	 */
	public $promoCodeList;
	/**
	 * @access public
	 * @var PartnerAddressbookList
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
		"altName" => "string",
		"partnerCode" => "string",
		"isPerson" => "boolean",
		"phoneticName" => "string",
		"salutation" => "string",
		"firstName" => "string",
		"middleName" => "string",
		"lastName" => "string",
		"companyName" => "string",
		"parent" => "RecordRef",
		"phone" => "string",
		"fax" => "string",
		"email" => "string",
		"url" => "string",
		"defaultAddress" => "string",
		"isInactive" => "boolean",
		"lastModifiedDate" => "dateTime",
		"dateCreated" => "dateTime",
		"globalSubscriptionStatus" => "GlobalSubscriptionStatus",
		"referringUrl" => "string",
		"roleList" => "RecordRefList",
		"categoryList" => "CategoryList",
		"title" => "string",
		"printOnCheckAs" => "string",
		"taxIdNum" => "string",
		"vatRegNumber" => "string",
		"comments" => "string",
		"bcn" => "string",
		"image" => "RecordRef",
		"taxFractionUnit" => "TaxFractionUnit",
		"emailPreference" => "EmailPreference",
		"taxRounding" => "TaxRounding",
		"department" => "RecordRef",
		"location" => "RecordRef",
		"class" => "RecordRef",
		"subsidiary" => "RecordRef",
		"homePhone" => "string",
		"mobilePhone" => "string",
		"altEmail" => "string",
		"giveAccess" => "boolean",
		"accessRole" => "RecordRef",
		"sendEmail" => "boolean",
		"password" => "string",
		"password2" => "string",
		"requirePwdChange" => "boolean",
		"subPartnerLogin" => "boolean",
		"loginAs" => "string",
		"eligibleForCommission" => "boolean",
		"contactRolesList" => "ContactAccessRolesList",
		"promoCodeList" => "PartnerPromoCodeList",
		"addressbookList" => "PartnerAddressbookList",
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
