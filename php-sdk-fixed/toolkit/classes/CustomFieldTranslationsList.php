<?php

class CustomFieldTranslationsList {
	/**
	 * @access public
	 * @var CustomFieldTranslations[]
	 */
	public $translations;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"translations" => "CustomFieldTranslations[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
