<?php

class ManufacturingOperationTaskSearch extends SearchRecord {
	/**
	 * @access public
	 * @var ManufacturingOperationTaskSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var ManufacturingOperationTaskSearchBasic
	 */
	public $predecessorJoin;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $userJoin;
	/**
	 * @access public
	 * @var TransactionSearchBasic
	 */
	public $workOrderJoin;
	/**
	 * @access public
	 * @var CustomSearchJoin[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "ManufacturingOperationTaskSearchBasic",
		"predecessorJoin" => "ManufacturingOperationTaskSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"workOrderJoin" => "TransactionSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
    public static function create()
    {
        return new static();
    }
}
