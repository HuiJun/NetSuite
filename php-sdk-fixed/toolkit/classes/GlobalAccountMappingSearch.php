<?php

class GlobalAccountMappingSearch extends SearchRecord {
	/**
	 * @access public
	 * @var GlobalAccountMappingSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var ClassificationSearchBasic
	 */
	public $classJoin;
	/**
	 * @access public
	 * @var DepartmentSearchBasic
	 */
	public $departmentJoin;
	/**
	 * @access public
	 * @var AccountSearchBasic
	 */
	public $destinationAccountJoin;
	/**
	 * @access public
	 * @var LocationSearchBasic
	 */
	public $locationJoin;
	/**
	 * @access public
	 * @var AccountSearchBasic
	 */
	public $sourceAccountJoin;
	/**
	 * @access public
	 * @var SubsidiarySearchBasic
	 */
	public $subsidiaryJoin;
	/**
	 * @access public
	 * @var CustomSearchJoin[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "GlobalAccountMappingSearchBasic",
		"classJoin" => "ClassificationSearchBasic",
		"departmentJoin" => "DepartmentSearchBasic",
		"destinationAccountJoin" => "AccountSearchBasic",
		"locationJoin" => "LocationSearchBasic",
		"sourceAccountJoin" => "AccountSearchBasic",
		"subsidiaryJoin" => "SubsidiarySearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
    public static function create()
    {
        return new static();
    }
}
