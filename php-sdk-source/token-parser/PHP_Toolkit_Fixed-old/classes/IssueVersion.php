<?php

class IssueVersion {
	/**
	 * @access public
	 * @var boolean
	 */
	public $primary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $version;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $build;

	static $paramtypesmap = array(
		"primary" => "boolean",
		"version" => "RecordRef",
		"build" => "RecordRef",
	);
    public static function create()
    {
        return new static();
    }
}
