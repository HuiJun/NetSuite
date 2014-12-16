<?php

class InventoryNumberLocations {
	/**
	 * @access public
	 * @var string
	 */
	public $location;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityOnHand;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityAvailable;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityOnOrder;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityInTransit;

	static $paramtypesmap = array(
		"location" => "string",
		"quantityOnHand" => "float",
		"quantityAvailable" => "float",
		"quantityOnOrder" => "float",
		"quantityInTransit" => "float",
	);
    public static function create()
    {
        return new static();
    }
}
