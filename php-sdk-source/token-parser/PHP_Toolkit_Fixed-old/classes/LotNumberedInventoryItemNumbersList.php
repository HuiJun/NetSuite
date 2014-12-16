<?php

class LotNumberedInventoryItemNumbersList {
	/**
	 * @access public
	 * @var LotNumberedInventoryItemNumbers[]
	 */
	public $numbers;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"numbers" => "LotNumberedInventoryItemNumbers[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
