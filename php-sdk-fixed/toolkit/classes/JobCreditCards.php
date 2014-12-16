<?php

class JobCreditCards {
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
	 * @var string
	 */
	public $ccMemo;
	/**
	 * @access public
	 * @var boolean
	 */
	public $ccDefault;
	/**
	 * @access public
	 * @var string
	 */
	public $debitCardIssueNo;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $validFrom;

	static $paramtypesmap = array(
		"internalId" => "string",
		"ccNumber" => "string",
		"ccExpireDate" => "dateTime",
		"ccName" => "string",
		"paymentMethod" => "RecordRef",
		"ccMemo" => "string",
		"ccDefault" => "boolean",
		"debitCardIssueNo" => "string",
		"validFrom" => "dateTime",
	);
    public static function create()
    {
        return new static();
    }
}
