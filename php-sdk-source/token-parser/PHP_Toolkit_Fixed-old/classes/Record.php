<?php

class Record {
	/**
	 * @access public
	 * @var NullField
	 */
	public $nullFieldList;

	static $paramtypesmap = array(
		"nullFieldList" => "NullField",
	);
    public static function create()
    {
        return new static();
    }
}
