<?php

class InventoryDetailSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $binNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $inventoryNumber;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantity;

	static $paramtypesmap = array(
		"binNumber" => "SearchMultiSelectField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"inventoryNumber" => "SearchMultiSelectField",
		"quantity" => "SearchDoubleField",
	);
    public static function create()
    {
        return new static();
    }
}
