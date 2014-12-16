<?php

class ItemDemandPlanSearch extends SearchRecord {
	/**
	 * @access public
	 * @var ItemDemandPlanSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var ItemSearchBasic
	 */
	public $itemJoin;
	/**
	 * @access public
	 * @var ItemSearchBasic
	 */
	public $lastAlternateSourceItemJoin;
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
		"basic" => "ItemDemandPlanSearchBasic",
		"itemJoin" => "ItemSearchBasic",
		"lastAlternateSourceItemJoin" => "ItemSearchBasic",
		"locationJoin" => "LocationSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
    public static function create()
    {
        return new static();
    }
}
