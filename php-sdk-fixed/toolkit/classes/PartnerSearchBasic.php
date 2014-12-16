<?php

class PartnerSearchBasic extends SearchRecordBasic {
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
	public $assignTasks;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $attention;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $billAddress;
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
	public $department;
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
	 * @var SearchEnumMultiSelectField
	 */
	public $emailPreference;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $entityId;
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
	 * @var SearchBooleanField
	 */
	public $hasDuplicates;
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
	public $isPerson;
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
	 * @var SearchStringField
	 */
	public $middleName;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $otherRelationships;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $parent;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $partnerCode;
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
	 * @var SearchMultiSelectField
	 */
	public $promoCode;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $salutation;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $shipAddress;
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
	 * @var SearchStringField
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $URL;
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
		"assignTasks" => "SearchBooleanField",
		"attention" => "SearchStringField",
		"billAddress" => "SearchStringField",
		"category" => "SearchMultiSelectField",
		"city" => "SearchStringField",
		"class" => "SearchMultiSelectField",
		"comments" => "SearchStringField",
		"commissionPlan" => "SearchMultiSelectField",
		"country" => "SearchEnumMultiSelectField",
		"county" => "SearchStringField",
		"dateCreated" => "SearchDateField",
		"department" => "SearchMultiSelectField",
		"eligibleForCommission" => "SearchBooleanField",
		"email" => "SearchStringField",
		"emailPreference" => "SearchEnumMultiSelectField",
		"entityId" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"fax" => "SearchStringField",
		"firstName" => "SearchStringField",
		"giveAccess" => "SearchBooleanField",
		"globalSubscriptionStatus" => "SearchEnumMultiSelectField",
		"group" => "SearchMultiSelectField",
		"hasDuplicates" => "SearchBooleanField",
		"image" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isDefaultBilling" => "SearchBooleanField",
		"isDefaultShipping" => "SearchBooleanField",
		"isInactive" => "SearchBooleanField",
		"isPerson" => "SearchBooleanField",
		"language" => "SearchEnumMultiSelectField",
		"lastModifiedDate" => "SearchDateField",
		"lastName" => "SearchStringField",
		"level" => "SearchEnumMultiSelectField",
		"location" => "SearchMultiSelectField",
		"middleName" => "SearchStringField",
		"otherRelationships" => "SearchEnumMultiSelectField",
		"parent" => "SearchMultiSelectField",
		"partnerCode" => "SearchStringField",
		"permission" => "SearchEnumMultiSelectField",
		"phone" => "SearchStringField",
		"phoneticName" => "SearchStringField",
		"promoCode" => "SearchMultiSelectField",
		"salutation" => "SearchStringField",
		"shipAddress" => "SearchStringField",
		"state" => "SearchStringField",
		"subsidiary" => "SearchMultiSelectField",
		"title" => "SearchStringField",
		"URL" => "SearchStringField",
		"zipCode" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
