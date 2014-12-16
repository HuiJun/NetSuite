<?php

class CustomerDownloadList {
	/**
	 * @access public
	 * @var CustomerDownload[]
	 */
	public $download;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"download" => "CustomerDownload[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
