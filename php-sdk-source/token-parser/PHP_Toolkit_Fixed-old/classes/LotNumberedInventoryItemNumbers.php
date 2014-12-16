<?php

class LotNumberedInventoryItemNumbers {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $serialNumber;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityOnHand;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $expirationDate;

	static $paramtypesmap = array(
		"serialNumber" => "RecordRef",
		"quantityOnHand" => "float",
		"expirationDate" => "dateTime",
	);
    public static function create()
    {
        return new static();
    }
}
