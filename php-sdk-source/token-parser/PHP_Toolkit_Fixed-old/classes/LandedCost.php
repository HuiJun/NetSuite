<?php

class LandedCost extends Record {
	/**
	 * @access public
	 * @var LandedCostDataList
	 */
	public $landedCostDataList;

	static $paramtypesmap = array(
		"landedCostDataList" => "LandedCostDataList",
	);
    public static function create()
    {
        return new static();
    }
}
