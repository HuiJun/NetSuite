<?php

class AttachReference {
	/**
	 * @access public
	 * @var BaseRef
	 */
	public $attachTo;

	static $paramtypesmap = array(
		"attachTo" => "BaseRef",
	);
    public static function create()
    {
        return new static();
    }
}
