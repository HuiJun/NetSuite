<?php

class SolutionsList {
	/**
	 * @access public
	 * @var Solutions[]
	 */
	public $solutions;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"solutions" => "Solutions[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
