<?php

class CustomListTranslationsList {
	/**
	 * @access public
	 * @var CustomListTranslations[]
	 */
	public $translations;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"translations" => "CustomListTranslations[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
