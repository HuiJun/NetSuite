<?php

class ChargeSearch extends SearchRecord {
	/**
	 * @access public
	 * @var ChargeSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var TransactionSearchBasic
	 */
	public $invoiceJoin;
	/**
	 * @access public
	 * @var JobSearchBasic
	 */
	public $jobJoin;
	/**
	 * @access public
	 * @var TransactionSearchBasic
	 */
	public $salesOrderJoin;
	/**
	 * @access public
	 * @var TimeBillSearchBasic
	 */
	public $timeJoin;
	/**
	 * @access public
	 * @var TransactionSearchBasic
	 */
	public $transactionJoin;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $userJoin;
	/**
	 * @access public
	 * @var CustomSearchJoin[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "ChargeSearchBasic",
		"invoiceJoin" => "TransactionSearchBasic",
		"jobJoin" => "JobSearchBasic",
		"salesOrderJoin" => "TransactionSearchBasic",
		"timeJoin" => "TimeBillSearchBasic",
		"transactionJoin" => "TransactionSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
    public static function create()
    {
        return new static();
    }
}
