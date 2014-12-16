<?php

class RevRecScheduleSearch extends SearchRecord {
	/**
	 * @access public
	 * @var RevRecScheduleSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var TransactionSearchBasic
	 */
	public $appliedToTransactionJoin;
	/**
	 * @access public
	 * @var CustomerSearchBasic
	 */
	public $customerJoin;
	/**
	 * @access public
	 * @var ItemSearchBasic
	 */
	public $itemJoin;
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

	static $paramtypesmap = array(
		"basic" => "RevRecScheduleSearchBasic",
		"appliedToTransactionJoin" => "TransactionSearchBasic",
		"customerJoin" => "CustomerSearchBasic",
		"itemJoin" => "ItemSearchBasic",
		"transactionJoin" => "TransactionSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
    public static function create()
    {
        return new static();
    }
}
