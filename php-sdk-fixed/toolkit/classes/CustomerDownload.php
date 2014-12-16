<?php

class CustomerDownload {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $file;
	/**
	 * @access public
	 * @var string
	 */
	public $licenseCode;
	/**
	 * @access public
	 * @var integer
	 */
	public $remainingDownloads;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $expiration;

	static $paramtypesmap = array(
		"file" => "RecordRef",
		"licenseCode" => "string",
		"remainingDownloads" => "integer",
		"expiration" => "dateTime",
	);
    public static function create()
    {
        return new static();
    }
}
