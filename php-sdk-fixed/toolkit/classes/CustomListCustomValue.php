<?php

class CustomListCustomValue {
	/**
	 * @access public
	 * @var string
	 */
	public $value;
	/**
	 * @access public
	 * @var string
	 */
	public $abbreviation;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var integer
	 */
	public $valueId;
	/**
	 * @access public
	 * @var LanguageValueList
	 */
	public $valueLanguageValueList;

	static $paramtypesmap = array(
		"value" => "string",
		"abbreviation" => "string",
		"isInactive" => "boolean",
		"valueId" => "integer",
		"valueLanguageValueList" => "LanguageValueList",
	);
    public static function create()
    {
        return new static();
    }
}
