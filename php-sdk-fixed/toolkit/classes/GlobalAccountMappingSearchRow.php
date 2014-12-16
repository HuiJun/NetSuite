<?php

class GlobalAccountMappingSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var GlobalAccountMappingSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var ClassificationSearchRowBasic
	 */
	public $classJoin;
	/**
	 * @access public
	 * @var DepartmentSearchRowBasic
	 */
	public $departmentJoin;
	/**
	 * @access public
	 * @var AccountSearchRowBasic
	 */
	public $destinationAccountJoin;
	/**
	 * @access public
	 * @var LocationSearchRowBasic
	 */
	public $locationJoin;
	/**
	 * @access public
	 * @var AccountSearchRowBasic
	 */
	public $sourceAccountJoin;
	/**
	 * @access public
	 * @var SubsidiarySearchRowBasic
	 */
	public $subsidiaryJoin;
	/**
	 * @access public
	 * @var CustomSearchRowBasic[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "GlobalAccountMappingSearchRowBasic",
		"classJoin" => "ClassificationSearchRowBasic",
		"departmentJoin" => "DepartmentSearchRowBasic",
		"destinationAccountJoin" => "AccountSearchRowBasic",
		"locationJoin" => "LocationSearchRowBasic",
		"sourceAccountJoin" => "AccountSearchRowBasic",
		"subsidiaryJoin" => "SubsidiarySearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
    public static function create()
    {
        return new static();
    }
}
