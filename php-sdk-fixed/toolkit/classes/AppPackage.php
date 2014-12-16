<?php

class AppPackage extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $appDefinition;
	/**
	 * @access public
	 * @var string
	 */
	public $version;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $packageFile;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $bundle;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $externalId;

	static $paramtypesmap = array(
		"appDefinition" => "RecordRef",
		"version" => "string",
		"packageFile" => "RecordRef",
		"bundle" => "RecordRef",
		"description" => "string",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
