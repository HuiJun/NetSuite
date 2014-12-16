<?php

class TaskTimeItemList {
	/**
	 * @access public
	 * @var TimeItem[]
	 */
	public $timeItem;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"timeItem" => "TimeItem[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
