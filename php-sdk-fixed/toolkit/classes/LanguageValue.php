<?php

class LanguageValue {
	/**
	 * @access public
	 * @var Language
	 */
	public $locale;
	/**
	 * @access public
	 * @var string
	 */
	public $value;

	static $paramtypesmap = array(
		"locale" => "Language",
		"value" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
