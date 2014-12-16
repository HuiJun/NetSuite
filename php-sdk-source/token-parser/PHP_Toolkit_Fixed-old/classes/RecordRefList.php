<?php

class RecordRefList {
	/**
	 * @access public
	 * @var RecordRef[]
	 */
	public $recordRef;

	static $paramtypesmap = array(
		"recordRef" => "RecordRef[]",
	);
    public static function create()
    {
        return new static();
    }
}
