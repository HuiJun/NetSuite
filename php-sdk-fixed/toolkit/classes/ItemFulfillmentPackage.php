<?php

class ItemFulfillmentPackage {
	/**
	 * @access public
	 * @var float
	 */
	public $packageWeight;
	/**
	 * @access public
	 * @var string
	 */
	public $packageDescr;
	/**
	 * @access public
	 * @var string
	 */
	public $packageTrackingNumber;

	static $paramtypesmap = array(
		"packageWeight" => "float",
		"packageDescr" => "string",
		"packageTrackingNumber" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
