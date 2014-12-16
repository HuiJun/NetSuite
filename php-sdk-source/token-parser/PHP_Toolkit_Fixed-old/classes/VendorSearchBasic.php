<?php

class VendorSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $accountNumber;
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
	public $attention;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $balance;
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
	 * @var SearchStringField
	 */
	public $comments;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $contact;
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
	 * @var SearchDoubleField
	 */
	public $creditLimit;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $currency;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $currentExchangeRate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $dateCreated;
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
	 * @var SearchBooleanField
	 */
	public $emailTransactions;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $entityId;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $expenseAccount;
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
	 * @var SearchBooleanField
	 */
	public $faxTransactions;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $firstName;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxBalance;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxUnbilledOrders;
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
	public $is1099Eligible;
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
	public $isJobResourceVend;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isPerson;
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
	 * @var SearchEnumMultiSelectField
	 */
	public $level;
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
	public $payablesAccount;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $pec;
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
	 * @var SearchBooleanField
	 */
	public $printTransactions;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $purchaseOrderAmount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $purchaseOrderQuantity;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $purchaseOrderQuantityDiff;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $receiptAmount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $receiptQuantity;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $receiptQuantityDiff;
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
	public $taxIdNum;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $unbilledOrders;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $url;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $vatRegNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $workCalendar;
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
		"accountNumber" => "SearchStringField",
		"address" => "SearchStringField",
		"addressee" => "SearchStringField",
		"addressLabel" => "SearchStringField",
		"addressPhone" => "SearchStringField",
		"attention" => "SearchStringField",
		"balance" => "SearchDoubleField",
		"billAddress" => "SearchStringField",
		"category" => "SearchMultiSelectField",
		"city" => "SearchStringField",
		"comments" => "SearchStringField",
		"contact" => "SearchStringField",
		"country" => "SearchEnumMultiSelectField",
		"county" => "SearchStringField",
		"creditLimit" => "SearchDoubleField",
		"currency" => "SearchMultiSelectField",
		"currentExchangeRate" => "SearchDoubleField",
		"dateCreated" => "SearchDateField",
		"eligibleForCommission" => "SearchBooleanField",
		"email" => "SearchStringField",
		"emailPreference" => "SearchEnumMultiSelectField",
		"emailTransactions" => "SearchBooleanField",
		"entityId" => "SearchStringField",
		"expenseAccount" => "SearchMultiSelectField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"fax" => "SearchStringField",
		"faxTransactions" => "SearchBooleanField",
		"firstName" => "SearchStringField",
		"fxBalance" => "SearchDoubleField",
		"fxUnbilledOrders" => "SearchDoubleField",
		"giveAccess" => "SearchBooleanField",
		"globalSubscriptionStatus" => "SearchEnumMultiSelectField",
		"group" => "SearchMultiSelectField",
		"hasDuplicates" => "SearchBooleanField",
		"image" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"is1099Eligible" => "SearchBooleanField",
		"isDefaultBilling" => "SearchBooleanField",
		"isDefaultShipping" => "SearchBooleanField",
		"isInactive" => "SearchBooleanField",
		"isJobResourceVend" => "SearchBooleanField",
		"isPerson" => "SearchBooleanField",
		"laborCost" => "SearchDoubleField",
		"language" => "SearchEnumMultiSelectField",
		"lastModifiedDate" => "SearchDateField",
		"lastName" => "SearchStringField",
		"level" => "SearchEnumMultiSelectField",
		"middleName" => "SearchStringField",
		"otherRelationships" => "SearchEnumMultiSelectField",
		"payablesAccount" => "SearchMultiSelectField",
		"pec" => "SearchStringField",
		"permission" => "SearchEnumMultiSelectField",
		"phone" => "SearchStringField",
		"phoneticName" => "SearchStringField",
		"printTransactions" => "SearchBooleanField",
		"purchaseOrderAmount" => "SearchDoubleField",
		"purchaseOrderQuantity" => "SearchDoubleField",
		"purchaseOrderQuantityDiff" => "SearchDoubleField",
		"receiptAmount" => "SearchDoubleField",
		"receiptQuantity" => "SearchDoubleField",
		"receiptQuantityDiff" => "SearchDoubleField",
		"salutation" => "SearchStringField",
		"shipAddress" => "SearchStringField",
		"state" => "SearchStringField",
		"subsidiary" => "SearchMultiSelectField",
		"taxIdNum" => "SearchStringField",
		"title" => "SearchStringField",
		"unbilledOrders" => "SearchDoubleField",
		"url" => "SearchStringField",
		"vatRegNumber" => "SearchStringField",
		"workCalendar" => "SearchMultiSelectField",
		"zipCode" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
