<?php

class JobResourcesList {
	/**
	 * @access public
	 * @var JobResources[]
	 */
	public $jobResources;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"jobResources" => "JobResources[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
