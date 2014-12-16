<?php

class ItemBinNumberSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $binNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityAvailable;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityOnHand;

	static $paramtypesmap = array(
		"binNumber" => "SearchMultiSelectField",
		"location" => "SearchMultiSelectField",
		"quantityAvailable" => "SearchDoubleField",
		"quantityOnHand" => "SearchDoubleField",
	);
    public static function create()
    {
        return new static();
    }
}
