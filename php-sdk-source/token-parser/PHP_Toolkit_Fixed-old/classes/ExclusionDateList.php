<?php

class ExclusionDateList {
	/**
	 * @access public
	 * @var dateTime[]
	 */
	public $exclusionDate;

	static $paramtypesmap = array(
		"exclusionDate" => "dateTime[]",
	);
    public static function create()
    {
        return new static();
    }
}
