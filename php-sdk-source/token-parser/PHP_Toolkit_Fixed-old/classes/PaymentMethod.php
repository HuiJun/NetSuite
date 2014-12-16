<?php

class PaymentMethod extends Record {
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var boolean
	 */
	public $creditCard;
	/**
	 * @access public
	 * @var boolean
	 */
	public $undepFunds;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $account;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isOnline;
	/**
	 * @access public
	 * @var PaymentMethodVisualsList
	 */
	public $visualsList;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isDebitCard;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $merchantAccountsList;
	/**
	 * @access public
	 * @var string
	 */
	public $payPalEmailAddress;
	/**
	 * @access public
	 * @var string
	 */
	public $expressCheckoutArrangement;
	/**
	 * @access public
	 * @var boolean
	 */
	public $useExpressCheckout;
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
		"name" => "string",
		"creditCard" => "boolean",
		"undepFunds" => "boolean",
		"account" => "RecordRef",
		"isInactive" => "boolean",
		"isOnline" => "boolean",
		"visualsList" => "PaymentMethodVisualsList",
		"isDebitCard" => "boolean",
		"merchantAccountsList" => "RecordRefList",
		"payPalEmailAddress" => "string",
		"expressCheckoutArrangement" => "string",
		"useExpressCheckout" => "boolean",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
