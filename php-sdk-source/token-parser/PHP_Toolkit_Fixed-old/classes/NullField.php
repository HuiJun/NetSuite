<?php

class NullField {
	/**
	 * @access public
	 * @var string[]
	 */
	public $name;

	static $paramtypesmap = array(
		"name" => "string[]",
	);
    public static function create()
    {
        return new static();
    }
}
