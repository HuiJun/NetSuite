<?php

class GiftCertificate extends Record {
	/**
	 * @access public
	 * @var string
	 */
	public $giftCertCode;
	/**
	 * @access public
	 * @var string
	 */
	public $sender;
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var string
	 */
	public $email;
	/**
	 * @access public
	 * @var string
	 */
	public $message;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $expirationDate;
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
	 * @var float
	 */
	public $originalAmount;
	/**
	 * @access public
	 * @var float
	 */
	public $amountRemaining;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;

	static $paramtypesmap = array(
		"giftCertCode" => "string",
		"sender" => "string",
		"name" => "string",
		"email" => "string",
		"message" => "string",
		"expirationDate" => "dateTime",
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"originalAmount" => "float",
		"amountRemaining" => "float",
		"internalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
