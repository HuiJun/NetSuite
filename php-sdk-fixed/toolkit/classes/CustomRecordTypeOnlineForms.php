<?php

class CustomRecordTypeOnlineForms {
	/**
	 * @access public
	 * @var string
	 */
	public $onlineFormName;
	/**
	 * @access public
	 * @var string
	 */
	public $isOnline;
	/**
	 * @access public
	 * @var string
	 */
	public $templateName;

	static $paramtypesmap = array(
		"onlineFormName" => "string",
		"isOnline" => "string",
		"templateName" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
