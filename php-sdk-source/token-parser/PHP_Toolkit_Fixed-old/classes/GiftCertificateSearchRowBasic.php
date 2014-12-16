<?php

class GiftCertificateSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $amountRemaining;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $amtAvailBilled;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $email;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $expirationDate;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $gcActive;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $giftCertCode;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $incomeAcct;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $liabilityAcct;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $message;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $originalAmount;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $purchaseDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $sender;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"amountRemaining" => "SearchColumnDoubleField[]",
		"amtAvailBilled" => "SearchColumnDoubleField[]",
		"createdDate" => "SearchColumnDateField[]",
		"email" => "SearchColumnStringField[]",
		"expirationDate" => "SearchColumnDateField[]",
		"gcActive" => "SearchColumnBooleanField[]",
		"giftCertCode" => "SearchColumnStringField[]",
		"incomeAcct" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"item" => "SearchColumnSelectField[]",
		"liabilityAcct" => "SearchColumnStringField[]",
		"message" => "SearchColumnStringField[]",
		"name" => "SearchColumnStringField[]",
		"originalAmount" => "SearchColumnDoubleField[]",
		"purchaseDate" => "SearchColumnDateField[]",
		"sender" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
