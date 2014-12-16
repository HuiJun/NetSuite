<?php

class ChargeSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var ChargeSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var TransactionSearchRowBasic
	 */
	public $invoiceJoin;
	/**
	 * @access public
	 * @var JobSearchRowBasic
	 */
	public $jobJoin;
	/**
	 * @access public
	 * @var TransactionSearchRowBasic
	 */
	public $salesOrderJoin;
	/**
	 * @access public
	 * @var TimeBillSearchRowBasic
	 */
	public $timeJoin;
	/**
	 * @access public
	 * @var TransactionSearchRowBasic
	 */
	public $transactionJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $userJoin;
	/**
	 * @access public
	 * @var CustomSearchRowBasic[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "ChargeSearchRowBasic",
		"invoiceJoin" => "TransactionSearchRowBasic",
		"jobJoin" => "JobSearchRowBasic",
		"salesOrderJoin" => "TransactionSearchRowBasic",
		"timeJoin" => "TimeBillSearchRowBasic",
		"transactionJoin" => "TransactionSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
    public static function create()
    {
        return new static();
    }
}
