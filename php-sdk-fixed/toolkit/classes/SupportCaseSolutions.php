<?php

class SupportCaseSolutions {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $solution;
	/**
	 * @access public
	 * @var string
	 */
	public $message;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $dateApplied;

	static $paramtypesmap = array(
		"solution" => "RecordRef",
		"message" => "string",
		"dateApplied" => "dateTime",
	);
    public static function create()
    {
        return new static();
    }
}
