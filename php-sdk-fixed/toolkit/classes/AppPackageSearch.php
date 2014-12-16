<?php

class AppPackageSearch extends SearchRecord {
	/**
	 * @access public
	 * @var AppPackageSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var AppDefinitionSearchBasic
	 */
	public $appDefinitionJoin;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $creatorJoin;
	/**
	 * @access public
	 * @var FileSearchBasic
	 */
	public $packageFileJoin;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $userJoin;

	static $paramtypesmap = array(
		"basic" => "AppPackageSearchBasic",
		"appDefinitionJoin" => "AppDefinitionSearchBasic",
		"creatorJoin" => "EmployeeSearchBasic",
		"packageFileJoin" => "FileSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
    public static function create()
    {
        return new static();
    }
}
