<?php

class GetAllRecord {
	/**
	 * @access public
	 * @var GetAllRecordType
	 */
	public $recordType;

	static $paramtypesmap = array(
		"recordType" => "GetAllRecordType",
	);
    public static function create()
    {
        return new static();
    }
}
