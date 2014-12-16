<?php

class CustomerCreditCards {
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $ccNumber;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $ccExpireDate;
	/**
	 * @access public
	 * @var string
	 */
	public $ccName;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $paymentMethod;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $cardState;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $stateFrom;
	/**
	 * @access public
	 * @var string
	 */
	public $debitcardIssueNo;
	/**
	 * @access public
	 * @var string
	 */
	public $ccMemo;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $validfrom;
	/**
	 * @access public
	 * @var boolean
	 */
	public $ccDefault;

	static $paramtypesmap = array(
		"internalId" => "string",
		"ccNumber" => "string",
		"ccExpireDate" => "dateTime",
		"ccName" => "string",
		"paymentMethod" => "RecordRef",
		"cardState" => "RecordRef",
		"stateFrom" => "dateTime",
		"debitcardIssueNo" => "string",
		"ccMemo" => "string",
		"validfrom" => "dateTime",
		"ccDefault" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
