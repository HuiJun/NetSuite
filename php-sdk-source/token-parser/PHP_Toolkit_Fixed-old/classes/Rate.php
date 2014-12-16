<?php

class Rate {
	/**
	 * @access public
	 * @var float
	 */
	public $value;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $priceLevel;

	static $paramtypesmap = array(
		"value" => "float",
		"priceLevel" => "RecordRef",
	);
    public static function create()
    {
        return new static();
    }
}
