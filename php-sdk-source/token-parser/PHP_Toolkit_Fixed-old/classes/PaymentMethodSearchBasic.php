<?php

class PaymentMethodSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $account;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $creditCard;
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
	public $isDebitCard;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;

	static $paramtypesmap = array(
		"account" => "SearchMultiSelectField",
		"creditCard" => "SearchBooleanField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isDebitCard" => "SearchBooleanField",
		"isInactive" => "SearchBooleanField",
		"name" => "SearchStringField",
	);
    public static function create()
    {
        return new static();
    }
}
