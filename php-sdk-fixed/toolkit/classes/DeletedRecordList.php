<?php

class DeletedRecordList {
	/**
	 * @access public
	 * @var DeletedRecord[]
	 */
	public $deletedRecord;

	static $paramtypesmap = array(
		"deletedRecord" => "DeletedRecord[]",
	);
    public static function create()
    {
        return new static();
    }
}
