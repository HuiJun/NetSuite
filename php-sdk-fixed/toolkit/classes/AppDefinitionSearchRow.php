<?php

class AppDefinitionSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var AppDefinitionSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var AppPackageSearchRowBasic
	 */
	public $appPackageJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $creatorJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $userJoin;

	static $paramtypesmap = array(
		"basic" => "AppDefinitionSearchRowBasic",
		"appPackageJoin" => "AppPackageSearchRowBasic",
		"creatorJoin" => "EmployeeSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
    public static function create()
    {
        return new static();
    }
}
