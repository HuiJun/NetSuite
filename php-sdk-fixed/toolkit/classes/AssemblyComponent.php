<?php

class AssemblyComponent {
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
	 * @var float
	 */
	public $quantityOnHand;
	/**
	 * @access public
	 * @var InventoryDetail
	 */
	public $componentInventoryDetail;
	/**
	 * @access public
	 * @var string
	 */
	public $componentNumbers;
	/**
	 * @access public
	 * @var string
	 */
	public $binNumbers;

	static $paramtypesmap = array(
		"item" => "RecordRef",
		"quantity" => "float",
		"quantityOnHand" => "float",
		"componentInventoryDetail" => "InventoryDetail",
		"componentNumbers" => "string",
		"binNumbers" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
