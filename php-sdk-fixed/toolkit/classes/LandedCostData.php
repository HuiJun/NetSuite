<?php

class LandedCostData {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $costCategory;
	/**
	 * @access public
	 * @var float
	 */
	public $amount;

	static $paramtypesmap = array(
		"costCategory" => "RecordRef",
		"amount" => "float",
	);
    public static function create()
    {
        return new static();
    }
}
