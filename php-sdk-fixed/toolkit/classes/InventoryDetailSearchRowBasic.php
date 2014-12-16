<?php

class InventoryDetailSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $binNumber;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $inventoryNumber;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantity;

	static $paramtypesmap = array(
		"binNumber" => "SearchColumnSelectField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"inventoryNumber" => "SearchColumnSelectField[]",
		"quantity" => "SearchColumnDoubleField[]",
	);
    public static function create()
    {
        return new static();
    }
}
