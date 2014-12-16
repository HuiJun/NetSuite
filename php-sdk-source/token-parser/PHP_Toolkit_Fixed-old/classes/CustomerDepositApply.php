<?php

class CustomerDepositApply {
	/**
	 * @access public
	 * @var integer
	 */
	public $doc;
	/**
	 * @access public
	 * @var integer
	 */
	public $line;
	/**
	 * @access public
	 * @var boolean
	 */
	public $apply;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $applyDate;
	/**
	 * @access public
	 * @var string
	 */
	public $type;
	/**
	 * @access public
	 * @var string
	 */
	public $refNum;
	/**
	 * @access public
	 * @var float
	 */
	public $total;
	/**
	 * @access public
	 * @var float
	 */
	public $amount;
	/**
	 * @access public
	 * @var string
	 */
	public $job;

	static $paramtypesmap = array(
		"doc" => "integer",
		"line" => "integer",
		"apply" => "boolean",
		"applyDate" => "dateTime",
		"type" => "string",
		"refNum" => "string",
		"total" => "float",
		"amount" => "float",
		"job" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
