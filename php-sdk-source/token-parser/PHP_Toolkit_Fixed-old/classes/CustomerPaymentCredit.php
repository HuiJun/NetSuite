<?php

class CustomerPaymentCredit {
	/**
	 * @access public
	 * @var boolean
	 */
	public $apply;
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
	 * @var dateTime
	 */
	public $creditDate;
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
	 * @var string
	 */
	public $appliedTo;
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
		"doc" => "integer",
		"line" => "integer",
		"creditDate" => "dateTime",
		"type" => "string",
		"refNum" => "string",
		"appliedTo" => "string",
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
