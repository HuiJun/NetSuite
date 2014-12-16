<?php

class AppDefinitionSearch extends SearchRecord {
	/**
	 * @access public
	 * @var AppDefinitionSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var AppPackageSearchBasic
	 */
	public $appPackageJoin;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $creatorJoin;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $userJoin;

	static $paramtypesmap = array(
		"basic" => "AppDefinitionSearchBasic",
		"appPackageJoin" => "AppPackageSearchBasic",
		"creatorJoin" => "EmployeeSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
    public static function create()
    {
        return new static();
    }
}
