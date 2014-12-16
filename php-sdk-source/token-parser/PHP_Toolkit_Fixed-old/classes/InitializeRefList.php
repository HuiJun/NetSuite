<?php

class InitializeRefList {
	/**
	 * @access public
	 * @var InitializeRef[]
	 */
	public $initializeRef;

	static $paramtypesmap = array(
		"initializeRef" => "InitializeRef[]",
	);
    public static function create()
    {
        return new static();
    }
}
