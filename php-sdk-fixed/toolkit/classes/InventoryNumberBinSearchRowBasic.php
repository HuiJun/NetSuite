<?php

class InventoryNumberBinSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $binNumber;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $inventoryNumber;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantityAvailable;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantityOnHand;

	static $paramtypesmap = array(
		"binNumber" => "SearchColumnSelectField[]",
		"inventoryNumber" => "SearchColumnStringField[]",
		"location" => "SearchColumnSelectField[]",
		"quantityAvailable" => "SearchColumnDoubleField[]",
		"quantityOnHand" => "SearchColumnDoubleField[]",
	);
    public static function create()
    {
        return new static();
    }
}
