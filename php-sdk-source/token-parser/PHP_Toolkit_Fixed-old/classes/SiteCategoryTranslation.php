<?php

class SiteCategoryTranslation {
	/**
	 * @access public
	 * @var Language
	 */
	public $locale;
	/**
	 * @access public
	 * @var string
	 */
	public $language;
	/**
	 * @access public
	 * @var string
	 */
	public $displayName;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var string
	 */
	public $storeDetailedDescription;
	/**
	 * @access public
	 * @var string
	 */
	public $pageTitle;

	static $paramtypesmap = array(
		"locale" => "Language",
		"language" => "string",
		"displayName" => "string",
		"description" => "string",
		"storeDetailedDescription" => "string",
		"pageTitle" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
