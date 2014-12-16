<?php

class RevRecTemplateRecurrenceList {
	/**
	 * @access public
	 * @var RevRecTemplateRecurrence[]
	 */
	public $revRecTemplateRecurrence;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"revRecTemplateRecurrence" => "RevRecTemplateRecurrence[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
