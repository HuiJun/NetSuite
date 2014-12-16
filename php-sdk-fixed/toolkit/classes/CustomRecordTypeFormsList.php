<?php

class CustomRecordTypeFormsList {
	/**
	 * @access public
	 * @var CustomRecordTypeForms[]
	 */
	public $forms;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"forms" => "CustomRecordTypeForms[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
