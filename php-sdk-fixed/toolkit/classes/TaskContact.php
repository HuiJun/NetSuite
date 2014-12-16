<?php

class TaskContact {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $company;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $contact;

	static $paramtypesmap = array(
		"company" => "RecordRef",
		"contact" => "RecordRef",
	);
    public static function create()
    {
        return new static();
    }
}
