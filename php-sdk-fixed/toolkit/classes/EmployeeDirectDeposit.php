<?php

class EmployeeDirectDeposit {
	/**
	 * @access public
	 * @var integer
	 */
	public $id;
	/**
	 * @access public
	 * @var boolean
	 */
	public $netAccount;
	/**
	 * @access public
	 * @var boolean
	 */
	public $savingsAccount;
	/**
	 * @access public
	 * @var boolean
	 */
	public $accountPrenoted;
	/**
	 * @access public
	 * @var EmployeeDirectDepositAccountStatus
	 */
	public $accountStatus;
	/**
	 * @access public
	 * @var string
	 */
	public $bankName;
	/**
	 * @access public
	 * @var string
	 */
	public $bankId;
	/**
	 * @access public
	 * @var string
	 */
	public $bankNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $bankRoutingNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $bankAccountNumber;
	/**
	 * @access public
	 * @var float
	 */
	public $amount;
	/**
	 * @access public
	 * @var boolean
	 */
	public $inactive;

	static $paramtypesmap = array(
		"id" => "integer",
		"netAccount" => "boolean",
		"savingsAccount" => "boolean",
		"accountPrenoted" => "boolean",
		"accountStatus" => "EmployeeDirectDepositAccountStatus",
		"bankName" => "string",
		"bankId" => "string",
		"bankNumber" => "string",
		"bankRoutingNumber" => "string",
		"bankAccountNumber" => "string",
		"amount" => "float",
		"inactive" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
