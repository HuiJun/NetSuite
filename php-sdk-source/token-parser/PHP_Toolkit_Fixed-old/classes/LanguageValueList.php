<?php

class LanguageValueList {
	/**
	 * @access public
	 * @var LanguageValue[]
	 */
	public $languageValue;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"languageValue" => "LanguageValue[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
