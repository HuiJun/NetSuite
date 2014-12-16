<?php

class AttachBasicReference extends AttachReference {
	/**
	 * @access public
	 * @var BaseRef
	 */
	public $attachedRecord;

	static $paramtypesmap = array(
		"attachedRecord" => "BaseRef",
	);
    public static function create()
    {
        return new static();
    }
}
