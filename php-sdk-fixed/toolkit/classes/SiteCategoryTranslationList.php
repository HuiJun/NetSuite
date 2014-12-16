<?php

class SiteCategoryTranslationList {
	/**
	 * @access public
	 * @var SiteCategoryTranslation[]
	 */
	public $translation;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"translation" => "SiteCategoryTranslation[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
