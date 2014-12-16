<?php

class ItemSupplyPlanSearch extends SearchRecord {
	/**
	 * @access public
	 * @var ItemSupplyPlanSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var ItemSearchBasic
	 */
	public $itemJoin;
	/**
	 * @access public
	 * @var LocationSearchBasic
	 */
	public $locationJoin;
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
		"basic" => "ItemSupplyPlanSearchBasic",
		"itemJoin" => "ItemSearchBasic",
		"locationJoin" => "LocationSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
    public static function create()
    {
        return new static();
    }
}
