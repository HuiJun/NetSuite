<?php

class PriceList {
	/**
	 * @access public
	 * @var Price[]
	 */
	public $price;

	static $paramtypesmap = array(
		"price" => "Price[]",
	);
    public static function create()
    {
        return new static();
    }
}
