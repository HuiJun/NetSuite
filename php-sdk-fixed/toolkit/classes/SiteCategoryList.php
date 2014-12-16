<?php

class SiteCategoryList {
	/**
	 * @access public
	 * @var SiteCategory[]
	 */
	public $siteCategory;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"siteCategory" => "SiteCategory[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
