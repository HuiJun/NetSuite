<?php

class Address extends Record {
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var Country
	 */
	public $country;
	/**
	 * @access public
	 * @var string
	 */
	public $attention;
	/**
	 * @access public
	 * @var string
	 */
	public $addressee;
	/**
	 * @access public
	 * @var string
	 */
	public $addrPhone;
	/**
	 * @access public
	 * @var string
	 */
	public $addr1;
	/**
	 * @access public
	 * @var string
	 */
	public $addr2;
	/**
	 * @access public
	 * @var string
	 */
	public $addr3;
	/**
	 * @access public
	 * @var string
	 */
	public $city;
	/**
	 * @access public
	 * @var string
	 */
	public $state;
	/**
	 * @access public
	 * @var string
	 */
	public $zip;
	/**
	 * @access public
	 * @var string
	 */
	public $addrText;
	/**
	 * @access public
	 * @var boolean
	 */
	public $override;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"internalId" => "string",
		"country" => "Country",
		"attention" => "string",
		"addressee" => "string",
		"addrPhone" => "string",
		"addr1" => "string",
		"addr2" => "string",
		"addr3" => "string",
		"city" => "string",
		"state" => "string",
		"zip" => "string",
		"addrText" => "string",
		"override" => "boolean",
		"customFieldList" => "CustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
