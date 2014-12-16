<?php

class PurchLandedCostList {
	/**
	 * @access public
	 * @var LandedCostSummary[]
	 */
	public $landedCost;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"landedCost" => "LandedCostSummary[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
