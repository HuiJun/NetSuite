<?php

class LandedCostDataList {
	/**
	 * @access public
	 * @var LandedCostData[]
	 */
	public $landedCostData;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"landedCostData" => "LandedCostData[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
