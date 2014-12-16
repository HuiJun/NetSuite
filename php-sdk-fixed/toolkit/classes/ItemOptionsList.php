<?php

class ItemOptionsList {
	/**
	 * @access public
	 * @var RecordRef[]
	 */
	public $itemOptions;

	static $paramtypesmap = array(
		"itemOptions" => "RecordRef[]",
	);
    public static function create()
    {
        return new static();
    }
}
