<?php

class DetachReference {
	/**
	 * @access public
	 * @var BaseRef
	 */
	public $detachFrom;

	static $paramtypesmap = array(
		"detachFrom" => "BaseRef",
	);
    public static function create()
    {
        return new static();
    }
}
