<?php

class LandedCostSummary {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $category;
	/**
	 * @access public
	 * @var float
	 */
	public $amount;
	/**
	 * @access public
	 * @var LandedCostSource
	 */
	public $source;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $transaction;

	static $paramtypesmap = array(
		"category" => "RecordRef",
		"amount" => "float",
		"source" => "LandedCostSource",
		"transaction" => "RecordRef",
	);
    public static function create()
    {
        return new static();
    }
}
