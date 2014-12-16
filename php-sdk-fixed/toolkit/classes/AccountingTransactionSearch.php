<?php

class AccountingTransactionSearch extends SearchRecord {
	/**
	 * @access public
	 * @var AccountingTransactionSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var AccountSearchBasic
	 */
	public $accountJoin;
	/**
	 * @access public
	 * @var RevRecScheduleSearchBasic
	 */
	public $revRecScheduleJoin;
	/**
	 * @access public
	 * @var TransactionSearchBasic
	 */
	public $transactionJoin;

	static $paramtypesmap = array(
		"basic" => "AccountingTransactionSearchBasic",
		"accountJoin" => "AccountSearchBasic",
		"revRecScheduleJoin" => "RevRecScheduleSearchBasic",
		"transactionJoin" => "TransactionSearchBasic",
	);
    public static function create()
    {
        return new static();
    }
}
