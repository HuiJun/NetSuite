<?php

class CustomRecordTypeLinks {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $linkCenter;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $linkSection;
	/**
	 * @access public
	 * @var string
	 */
	public $linkLabel;

	static $paramtypesmap = array(
		"linkCenter" => "RecordRef",
		"linkSection" => "RecordRef",
		"linkLabel" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
