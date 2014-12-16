<?php

class ItemsList {
	/**
	 * @access public
	 * @var RecordRef[]
	 */
	public $items;

	static $paramtypesmap = array(
		"items" => "RecordRef[]",
	);
    public static function create()
    {
        return new static();
    }
}
