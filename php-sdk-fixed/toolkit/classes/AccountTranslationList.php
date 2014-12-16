<?php

class AccountTranslationList {
	/**
	 * @access public
	 * @var ClassTranslation[]
	 */
	public $translation;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"translation" => "ClassTranslation[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
