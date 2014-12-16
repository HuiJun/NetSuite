<?php

class ManufacturingCostTemplateSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var ManufacturingCostTemplateSearchRowBasic
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
	/**
	 * @access public
	 * @var CustomSearchRowBasic[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "ManufacturingCostTemplateSearchRowBasic",
		"itemJoin" => "ItemSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
    public static function create()
    {
        return new static();
    }
}
