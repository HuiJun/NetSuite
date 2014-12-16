<?php

class JournalEntryLineList {
	/**
	 * @access public
	 * @var JournalEntryLine[]
	 */
	public $line;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"line" => "JournalEntryLine[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
