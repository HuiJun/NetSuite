<?php

class ItemSupplyPlanOrderList {
	/**
	 * @access public
	 * @var ItemSupplyPlanOrder[]
	 */
	public $itemSupplyPlanOrder;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"itemSupplyPlanOrder" => "ItemSupplyPlanOrder[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
