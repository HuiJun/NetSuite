<?php

class DepositOther {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $entity;
	/**
	 * @access public
	 * @var float
	 */
	public $amount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $account;
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
	public $department;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $class;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $location;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;

	static $paramtypesmap = array(
		"entity" => "RecordRef",
		"amount" => "float",
		"account" => "RecordRef",
		"paymentMethod" => "RecordRef",
		"refNum" => "string",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"memo" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
