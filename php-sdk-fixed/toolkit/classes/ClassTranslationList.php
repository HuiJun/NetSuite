<?php

class ClassTranslationList {
	/**
	 * @access public
	 * @var ClassTranslation[]
	 */
	public $classTranslation;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"classTranslation" => "ClassTranslation[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
