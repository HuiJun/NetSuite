<?php

class AppPackageSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var AppPackageSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var AppDefinitionSearchRowBasic
	 */
	public $appDefinitionJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $creatorJoin;
	/**
	 * @access public
	 * @var FileSearchRowBasic
	 */
	public $packageFileJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $userJoin;

	static $paramtypesmap = array(
		"basic" => "AppPackageSearchRowBasic",
		"appDefinitionJoin" => "AppDefinitionSearchRowBasic",
		"creatorJoin" => "EmployeeSearchRowBasic",
		"packageFileJoin" => "FileSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
    public static function create()
    {
        return new static();
    }
}
