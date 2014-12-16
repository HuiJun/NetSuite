<?php

class InventoryNumberSearch extends SearchRecord {
	/**
	 * @access public
	 * @var InventoryNumberSearchBasic
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
	/**
	 * @access public
	 * @var CustomSearchJoin[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "InventoryNumberSearchBasic",
		"itemJoin" => "ItemSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
    public static function create()
    {
        return new static();
    }
}
