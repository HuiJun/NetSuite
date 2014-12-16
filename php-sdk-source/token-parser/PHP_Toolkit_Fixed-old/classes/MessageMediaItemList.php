<?php

class MessageMediaItemList {
	/**
	 * @access public
	 * @var File[]
	 */
	public $mediaItem;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"mediaItem" => "File[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
