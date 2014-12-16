<?php

class BinSearch extends SearchRecord {
	/**
	 * @access public
	 * @var BinSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $userJoin;
	/**
	 * @access public
	 * @var CustomSearchJoin[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "BinSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
    public static function create()
    {
        return new static();
    }
}
