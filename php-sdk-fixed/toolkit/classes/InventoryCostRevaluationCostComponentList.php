<?php

class InventoryCostRevaluationCostComponentList {
	/**
	 * @access public
	 * @var InventoryCostRevaluationCostComponent[]
	 */
	public $costComponent;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"costComponent" => "InventoryCostRevaluationCostComponent[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
