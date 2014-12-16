<?php

class DetachBasicReference extends DetachReference {
	/**
	 * @access public
	 * @var BaseRef
	 */
	public $detachedRecord;

	static $paramtypesmap = array(
		"detachedRecord" => "BaseRef",
	);
    public static function create()
    {
        return new static();
    }
}
