<?php

class InventoryCostRevaluationCostComponent {
	/**
	 * @access public
	 * @var float
	 */
	public $cost;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $componentItem;
	/**
	 * @access public
	 * @var float
	 */
	public $quantity;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $units;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $costCategory;

	static $paramtypesmap = array(
		"cost" => "float",
		"componentItem" => "RecordRef",
		"quantity" => "float",
		"units" => "RecordRef",
		"costCategory" => "RecordRef",
	);
    public static function create()
    {
        return new static();
    }
}
