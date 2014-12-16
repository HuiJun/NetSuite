<?php

class EmailEmployeesList {
	/**
	 * @access public
	 * @var RecordRef[]
	 */
	public $emailEmployees;

	static $paramtypesmap = array(
		"emailEmployees" => "RecordRef[]",
	);
    public static function create()
    {
        return new static();
    }
}
