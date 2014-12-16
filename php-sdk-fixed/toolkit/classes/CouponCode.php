<?php

class CouponCode extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $promotion;
	/**
	 * @access public
	 * @var string
	 */
	public $code;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $recipient;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $dateSent;
	/**
	 * @access public
	 * @var boolean
	 */
	public $used;
	/**
	 * @access public
	 * @var integer
	 */
	public $useCount;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $externalId;

	static $paramtypesmap = array(
		"promotion" => "RecordRef",
		"code" => "string",
		"recipient" => "RecordRef",
		"dateSent" => "dateTime",
		"used" => "boolean",
		"useCount" => "integer",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
