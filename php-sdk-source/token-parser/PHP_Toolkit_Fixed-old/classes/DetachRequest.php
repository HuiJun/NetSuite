<?php

class DetachRequest {
	/**
	 * @access public
	 * @var DetachReference
	 */
	public $detachReference;

	static $paramtypesmap = array(
		"detachReference" => "DetachReference",
	);
    public static function create()
    {
        return new static();
    }
}
