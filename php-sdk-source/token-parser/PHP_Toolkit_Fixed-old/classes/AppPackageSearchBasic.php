<?php

class AppPackageSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $appDefinition;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $version;

	static $paramtypesmap = array(
		"appDefinition" => "SearchMultiSelectField",
		"description" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"version" => "SearchStringField",
	);
    public static function create()
    {
        return new static();
    }
}
