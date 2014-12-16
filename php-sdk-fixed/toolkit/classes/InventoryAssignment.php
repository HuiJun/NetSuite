<?php

class InventoryAssignment {
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $issueInventoryNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $receiptInventoryNumber;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $binNumber;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $toBinNumber;
	/**
	 * @access public
	 * @var float
	 */
	public $quantity;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $expirationDate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $quantityAvailable;

	static $paramtypesmap = array(
		"internalId" => "string",
		"issueInventoryNumber" => "RecordRef",
		"receiptInventoryNumber" => "string",
		"binNumber" => "RecordRef",
		"toBinNumber" => "RecordRef",
		"quantity" => "float",
		"expirationDate" => "dateTime",
		"quantityAvailable" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
