<?php

class AccountingTransactionSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var AccountingTransactionSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var AccountSearchRowBasic
	 */
	public $accountJoin;
	/**
	 * @access public
	 * @var RevRecScheduleSearchRowBasic
	 */
	public $revRecScheduleJoin;
	/**
	 * @access public
	 * @var TransactionSearchRowBasic
	 */
	public $transactionJoin;

	static $paramtypesmap = array(
		"basic" => "AccountingTransactionSearchRowBasic",
		"accountJoin" => "AccountSearchRowBasic",
		"revRecScheduleJoin" => "RevRecScheduleSearchRowBasic",
		"transactionJoin" => "TransactionSearchRowBasic",
	);
    public static function create()
    {
        return new static();
    }
}
