<?php

class ApplicationInfo {
	/**
	 * @access public
	 * @var string
	 */
	public $applicationId;

	static $paramtypesmap = array(
		"applicationId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
