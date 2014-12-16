<?php

class AttachRequest {
	/**
	 * @access public
	 * @var AttachReference
	 */
	public $attachReference;

	static $paramtypesmap = array(
		"attachReference" => "AttachReference",
	);
    public static function create()
    {
        return new static();
    }
}
