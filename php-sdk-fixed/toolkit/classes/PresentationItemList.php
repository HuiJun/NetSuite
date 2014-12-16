<?php

class PresentationItemList {
	/**
	 * @access public
	 * @var PresentationItem[]
	 */
	public $presentationItem;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"presentationItem" => "PresentationItem[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
