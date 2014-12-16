<?php

class InterCompanyJournalEntryLineList {
	/**
	 * @access public
	 * @var InterCompanyJournalEntryLine[]
	 */
	public $line;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"line" => "InterCompanyJournalEntryLine[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
