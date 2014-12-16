<?php

class Folder extends Record {
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $department;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isPrivate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $bundleable;
	/**
	 * @access public
	 * @var boolean
	 */
	public $hideInBundle;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isOnline;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $group;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $parent;
	/**
	 * @access public
	 * @var FolderFolderType
	 */
	public $folderType;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $class;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $location;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
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
		"name" => "string",
		"department" => "RecordRef",
		"description" => "string",
		"isInactive" => "boolean",
		"isPrivate" => "boolean",
		"bundleable" => "boolean",
		"hideInBundle" => "boolean",
		"isOnline" => "boolean",
		"group" => "RecordRef",
		"parent" => "RecordRef",
		"folderType" => "FolderFolderType",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"subsidiary" => "RecordRef",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
