<?php

class WorkOrderIssueComponent {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;
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
		"quantity" => "float",
		"componentInventoryDetail" => "InventoryDetail",
		"lineNumber" => "integer",
	);
    public static function create()
    {
        return new static();
    }
}
