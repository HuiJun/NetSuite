<?php

class ManufacturingRoutingSearch extends SearchRecord {
	/**
	 * @access public
	 * @var ManufacturingRoutingSearchBasic
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
	 * @var ManufacturingCostTemplateSearchBasic
	 */
	public $manufacturingCostTemplateJoin;
	/**
	 * @access public
	 * @var EntityGroupSearchBasic
	 */
	public $manufacturingWorkCenterJoin;
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
		"basic" => "ManufacturingRoutingSearchBasic",
		"itemJoin" => "ItemSearchBasic",
		"locationJoin" => "LocationSearchBasic",
		"manufacturingCostTemplateJoin" => "ManufacturingCostTemplateSearchBasic",
		"manufacturingWorkCenterJoin" => "EntityGroupSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
    public static function create()
    {
        return new static();
    }
}
