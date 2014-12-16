<?php

class ManufacturingRoutingSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var ManufacturingRoutingSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var ItemSearchRowBasic
	 */
	public $itemJoin;
	/**
	 * @access public
	 * @var LocationSearchRowBasic
	 */
	public $locationJoin;
	/**
	 * @access public
	 * @var ManufacturingCostTemplateSearchRowBasic
	 */
	public $manufacturingCostTemplateJoin;
	/**
	 * @access public
	 * @var EntityGroupSearchRowBasic
	 */
	public $manufacturingWorkCenterJoin;
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
		"basic" => "ManufacturingRoutingSearchRowBasic",
		"itemJoin" => "ItemSearchRowBasic",
		"locationJoin" => "LocationSearchRowBasic",
		"manufacturingCostTemplateJoin" => "ManufacturingCostTemplateSearchRowBasic",
		"manufacturingWorkCenterJoin" => "EntityGroupSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
    public static function create()
    {
        return new static();
    }
}
