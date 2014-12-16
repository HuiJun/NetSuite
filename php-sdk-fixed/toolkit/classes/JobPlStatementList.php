<?php

class JobPlStatementList {
	/**
	 * @access public
	 * @var JobPlStatement[]
	 */
	public $jobPlStatement;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"jobPlStatement" => "JobPlStatement[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
