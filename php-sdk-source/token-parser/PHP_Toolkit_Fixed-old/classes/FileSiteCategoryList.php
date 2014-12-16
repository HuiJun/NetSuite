<?php

class FileSiteCategoryList {
	/**
	 * @access public
	 * @var FileSiteCategory[]
	 */
	public $siteCategory;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"siteCategory" => "FileSiteCategory[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
