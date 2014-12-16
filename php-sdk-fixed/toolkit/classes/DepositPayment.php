<?php

class DepositPayment {
	/**
	 * @access public
	 * @var boolean
	 */
	public $deposit;
	/**
	 * @access public
	 * @var integer
	 */
	public $id;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $docDate;
	/**
	 * @access public
	 * @var string
	 */
	public $type;
	/**
	 * @access public
	 * @var string
	 */
	public $docNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $paymentMethod;
	/**
	 * @access public
	 * @var string
	 */
	public $refNum;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $entity;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $currency;
	/**
	 * @access public
	 * @var float
	 */
	public $transactionAmount;
	/**
	 * @access public
	 * @var float
	 */
	public $paymentAmount;

	static $paramtypesmap = array(
		"deposit" => "boolean",
		"id" => "integer",
		"docDate" => "dateTime",
		"type" => "string",
		"docNumber" => "string",
		"memo" => "string",
		"paymentMethod" => "RecordRef",
		"refNum" => "string",
		"entity" => "RecordRef",
		"currency" => "RecordRef",
		"transactionAmount" => "float",
		"paymentAmount" => "float",
	);
    public static function create()
    {
        return new static();
    }
}
