<?php

class CustomRecordTypeTranslationsList {
	/**
	 * @access public
	 * @var CustomRecordTypeTranslations[]
	 */
	public $translations;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"translations" => "CustomRecordTypeTranslations[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
