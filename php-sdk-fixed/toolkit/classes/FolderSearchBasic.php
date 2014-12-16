<?php

class FolderSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $class;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $department;
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
	public $group;
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
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isTopLevel;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $numFiles;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $owner;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $parent;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $predecessor;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $private;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $size;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;

	static $paramtypesmap = array(
		"class" => "SearchMultiSelectField",
		"department" => "SearchMultiSelectField",
		"description" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"group" => "SearchMultiSelectField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"isTopLevel" => "SearchBooleanField",
		"lastModifiedDate" => "SearchDateField",
		"location" => "SearchMultiSelectField",
		"name" => "SearchStringField",
		"numFiles" => "SearchLongField",
		"owner" => "SearchMultiSelectField",
		"parent" => "SearchMultiSelectField",
		"predecessor" => "SearchMultiSelectField",
		"private" => "SearchBooleanField",
		"size" => "SearchLongField",
		"subsidiary" => "SearchMultiSelectField",
	);
    public static function create()
    {
        return new static();
    }
}
