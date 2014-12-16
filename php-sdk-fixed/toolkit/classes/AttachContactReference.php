<?php

class AttachContactReference extends AttachReference {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $contact;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $contactRole;

	static $paramtypesmap = array(
		"contact" => "RecordRef",
		"contactRole" => "RecordRef",
	);
    public static function create()
    {
        return new static();
    }
}
