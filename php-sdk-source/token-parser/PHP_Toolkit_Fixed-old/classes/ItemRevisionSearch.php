<?php

class ItemRevisionSearch extends SearchRecord {
	/**
	 * @access public
	 * @var ItemRevisionSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var ItemSearchBasic
	 */
	public $itemJoin;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $userJoin;

	static $paramtypesmap = array(
		"basic" => "ItemRevisionSearchBasic",
		"itemJoin" => "ItemSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
    public static function create()
    {
        return new static();
    }
}
