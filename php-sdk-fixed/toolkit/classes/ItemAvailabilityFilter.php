<?php

class ItemAvailabilityFilter {
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $item;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastQtyAvailableChange;

	static $paramtypesmap = array(
		"item" => "RecordRefList",
		"lastQtyAvailableChange" => "dateTime",
	);
    public static function create()
    {
        return new static();
    }
}
