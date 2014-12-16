<?php

class DocumentInfo {
	/**
	 * @access public
	 * @var string
	 */
	public $nsId;

	static $paramtypesmap = array(
		"nsId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
