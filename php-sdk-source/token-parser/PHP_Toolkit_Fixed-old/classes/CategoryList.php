<?php

class CategoryList {
	/**
	 * @access public
	 * @var RecordRef[]
	 */
	public $category;

	static $paramtypesmap = array(
		"category" => "RecordRef[]",
	);
    public static function create()
    {
        return new static();
    }
}
