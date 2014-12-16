<?php

class Term extends Record {
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var boolean
	 */
	public $dateDriven;
	/**
	 * @access public
	 * @var integer
	 */
	public $daysUntilNetDue;
	/**
	 * @access public
	 * @var float
	 */
	public $discountPercent;
	/**
	 * @access public
	 * @var integer
	 */
	public $daysUntilExpiry;
	/**
	 * @access public
	 * @var integer
	 */
	public $dayOfMonthNetDue;
	/**
	 * @access public
	 * @var integer
	 */
	public $dueNextMonthIfWithinDays;
	/**
	 * @access public
	 * @var float
	 */
	public $discountPercentDateDriven;
	/**
	 * @access public
	 * @var integer
	 */
	public $dayDiscountExpires;
	/**
	 * @access public
	 * @var boolean
	 */
	public $preferred;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
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
		"name" => "string",
		"dateDriven" => "boolean",
		"daysUntilNetDue" => "integer",
		"discountPercent" => "float",
		"daysUntilExpiry" => "integer",
		"dayOfMonthNetDue" => "integer",
		"dueNextMonthIfWithinDays" => "integer",
		"discountPercentDateDriven" => "float",
		"dayDiscountExpires" => "integer",
		"preferred" => "boolean",
		"isInactive" => "boolean",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
