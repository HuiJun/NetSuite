<?php

class ItemRevisionSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var ItemRevisionSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var ItemSearchRowBasic
	 */
	public $itemJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $userJoin;

	static $paramtypesmap = array(
		"basic" => "ItemRevisionSearchRowBasic",
		"itemJoin" => "ItemSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
    public static function create()
    {
        return new static();
    }
}
