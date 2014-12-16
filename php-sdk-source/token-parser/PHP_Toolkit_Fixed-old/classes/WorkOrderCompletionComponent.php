<?php

class WorkOrderCompletionComponent {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityPer;
	/**
	 * @access public
	 * @var float
	 */
	public $quantity;
	/**
	 * @access public
	 * @var InventoryDetail
	 */
	public $componentInventoryDetail;
	/**
	 * @access public
	 * @var integer
	 */
	public $lineNumber;

	static $paramtypesmap = array(
		"item" => "RecordRef",
		"quantityPer" => "float",
		"quantity" => "float",
		"componentInventoryDetail" => "InventoryDetail",
		"lineNumber" => "integer",
	);
    public static function create()
    {
        return new static();
    }
}
