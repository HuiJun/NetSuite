<?php

class TranslationList {
	/**
	 * @access public
	 * @var Translation[]
	 */
	public $translation;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"translation" => "Translation[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
