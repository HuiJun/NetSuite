<?php

class VendorCreditApply {
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
	public $due;
	/**
	 * @access public
	 * @var string
	 */
	public $currency;
	/**
	 * @access public
	 * @var float
	 */
	public $amount;

	static $paramtypesmap = array(
		"apply" => "boolean",
		"applyDate" => "dateTime",
		"doc" => "integer",
		"line" => "integer",
		"type" => "string",
		"refNum" => "string",
		"total" => "float",
		"due" => "float",
		"currency" => "string",
		"amount" => "float",
	);
    public static function create()
    {
        return new static();
    }
}
