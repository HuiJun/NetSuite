<?php

class ManufacturingCostDetail {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $costCategory;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;
	/**
	 * @access public
	 * @var float
	 */
	public $fixedRate;
	/**
	 * @access public
	 * @var float
	 */
	public $runRate;

	static $paramtypesmap = array(
		"costCategory" => "RecordRef",
		"item" => "RecordRef",
		"fixedRate" => "float",
		"runRate" => "float",
	);
    public static function create()
    {
        return new static();
    }
}
