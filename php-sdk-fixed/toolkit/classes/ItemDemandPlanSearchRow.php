<?php

class ItemDemandPlanSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var ItemDemandPlanSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var ItemSearchRowBasic
	 */
	public $itemJoin;
	/**
	 * @access public
	 * @var ItemSearchRowBasic
	 */
	public $lastAlternateSourceItemJoin;
	/**
	 * @access public
	 * @var LocationSearchRowBasic
	 */
	public $locationJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $userJoin;
	/**
	 * @access public
	 * @var CustomSearchRowBasic[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "ItemDemandPlanSearchRowBasic",
		"itemJoin" => "ItemSearchRowBasic",
		"lastAlternateSourceItemJoin" => "ItemSearchRowBasic",
		"locationJoin" => "LocationSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
    public static function create()
    {
        return new static();
    }
}
