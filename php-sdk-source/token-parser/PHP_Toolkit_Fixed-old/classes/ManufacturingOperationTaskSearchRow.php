<?php

class ManufacturingOperationTaskSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var ManufacturingOperationTaskSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var ManufacturingOperationTaskSearchRowBasic
	 */
	public $predecessorJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $userJoin;
	/**
	 * @access public
	 * @var TransactionSearchRowBasic
	 */
	public $workOrderJoin;
	/**
	 * @access public
	 * @var CustomSearchRowBasic[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "ManufacturingOperationTaskSearchRowBasic",
		"predecessorJoin" => "ManufacturingOperationTaskSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"workOrderJoin" => "TransactionSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
    public static function create()
    {
        return new static();
    }
}
