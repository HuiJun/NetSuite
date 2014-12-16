<?php

class ItemBinNumberSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $binNumber;
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
		"location" => "SearchColumnSelectField[]",
		"quantityAvailable" => "SearchColumnDoubleField[]",
		"quantityOnHand" => "SearchColumnDoubleField[]",
	);
    public static function create()
    {
        return new static();
    }
}
