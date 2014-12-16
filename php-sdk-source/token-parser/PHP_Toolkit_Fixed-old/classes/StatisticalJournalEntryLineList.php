<?php

class StatisticalJournalEntryLineList {
	/**
	 * @access public
	 * @var StatisticalJournalEntryLine[]
	 */
	public $statisticalJournalEntryLine;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"statisticalJournalEntryLine" => "StatisticalJournalEntryLine[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
