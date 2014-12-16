<?php

class JobPlStatement {
	/**
	 * @access public
	 * @var string
	 */
	public $costCategory;
	/**
	 * @access public
	 * @var float
	 */
	public $revenue;
	/**
	 * @access public
	 * @var float
	 */
	public $cost;
	/**
	 * @access public
	 * @var float
	 */
	public $profit;
	/**
	 * @access public
	 * @var float
	 */
	public $margin;

	static $paramtypesmap = array(
		"costCategory" => "string",
		"revenue" => "float",
		"cost" => "float",
		"profit" => "float",
		"margin" => "float",
	);
    public static function create()
    {
        return new static();
    }
}
