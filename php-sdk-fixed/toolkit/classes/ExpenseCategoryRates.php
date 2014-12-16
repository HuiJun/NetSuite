<?php

class ExpenseCategoryRates {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $currency;
	/**
	 * @access public
	 * @var float
	 */
	public $defaultRate;

	static $paramtypesmap = array(
		"subsidiary" => "RecordRef",
		"currency" => "RecordRef",
		"defaultRate" => "float",
	);
    public static function create()
    {
        return new static();
    }
}
