<?php

class RevRecScheduleSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var RevRecScheduleSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var TransactionSearchRowBasic
	 */
	public $appliedToTransactionJoin;
	/**
	 * @access public
	 * @var CustomerSearchRowBasic
	 */
	public $customerJoin;
	/**
	 * @access public
	 * @var ItemSearchRowBasic
	 */
	public $itemJoin;
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

	static $paramtypesmap = array(
		"basic" => "RevRecScheduleSearchRowBasic",
		"appliedToTransactionJoin" => "TransactionSearchRowBasic",
		"customerJoin" => "CustomerSearchRowBasic",
		"itemJoin" => "ItemSearchRowBasic",
		"transactionJoin" => "TransactionSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
    public static function create()
    {
        return new static();
    }
}
