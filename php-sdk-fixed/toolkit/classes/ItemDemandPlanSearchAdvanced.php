<?php

class ItemDemandPlanSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var ItemDemandPlanSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var ItemDemandPlanSearchRow
	 */
	public $columns;
	/**
	 * @access public
	 * @var string
	 */
	public $savedSearchId;
	/**
	 * @access public
	 * @var string
	 */
	public $savedSearchScriptId;

	static $paramtypesmap = array(
		"criteria" => "ItemDemandPlanSearch",
		"columns" => "ItemDemandPlanSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
