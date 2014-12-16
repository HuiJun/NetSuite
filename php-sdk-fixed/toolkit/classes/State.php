<?php

class State extends Record {
	/**
	 * @access public
	 * @var Country
	 */
	public $country;
	/**
	 * @access public
	 * @var string
	 */
	public $fullName;
	/**
	 * @access public
	 * @var string
	 */
	public $shortname;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;

	static $paramtypesmap = array(
		"country" => "Country",
		"fullName" => "string",
		"shortname" => "string",
		"internalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
