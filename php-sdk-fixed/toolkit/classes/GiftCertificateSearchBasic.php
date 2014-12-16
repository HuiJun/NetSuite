<?php

class GiftCertificateSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $amountAvailableBilled;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $amountRemaining;
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
	 * @var SearchDateField
	 */
	public $expirationDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $giftCertCode;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $incomeAccount;
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
	public $isActive;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $liabilityAccount;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $message;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $originalAmount;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $purchaseDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $sender;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"amountAvailableBilled" => "SearchDoubleField",
		"amountRemaining" => "SearchDoubleField",
		"createdDate" => "SearchDateField",
		"email" => "SearchStringField",
		"expirationDate" => "SearchDateField",
		"giftCertCode" => "SearchStringField",
		"incomeAccount" => "SearchMultiSelectField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isActive" => "SearchBooleanField",
		"item" => "SearchMultiSelectField",
		"liabilityAccount" => "SearchMultiSelectField",
		"message" => "SearchStringField",
		"name" => "SearchStringField",
		"originalAmount" => "SearchDoubleField",
		"purchaseDate" => "SearchDateField",
		"sender" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
