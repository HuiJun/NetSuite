<?php

class CustomRecordTypeManagers {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $managerEmp;

	static $paramtypesmap = array(
		"managerEmp" => "RecordRef",
	);
    public static function create()
    {
        return new static();
    }
}
