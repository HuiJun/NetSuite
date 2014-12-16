<?php

class FileSiteCategory {
	/**
	 * @access public
	 * @var boolean
	 */
	public $isDefault;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $category;
	/**
	 * @access public
	 * @var string
	 */
	public $categoryDescription;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $website;

	static $paramtypesmap = array(
		"isDefault" => "boolean",
		"category" => "RecordRef",
		"categoryDescription" => "string",
		"website" => "RecordRef",
	);
    public static function create()
    {
        return new static();
    }
}
