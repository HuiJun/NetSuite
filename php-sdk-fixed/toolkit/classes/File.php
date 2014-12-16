<?php

class File extends Record {
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var FileAttachFrom
	 */
	public $attachFrom;
	/**
	 * @access public
	 * @var string
	 */
	public $mediaTypeName;
	/**
	 * @access public
	 * @var MediaType
	 */
	public $fileType;
	/**
	 * @access public
	 * @var base64Binary
	 */
	public $content;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $folder;
	/**
	 * @access public
	 * @var float
	 */
	public $fileSize;
	/**
	 * @access public
	 * @var string
	 */
	public $url;
	/**
	 * @access public
	 * @var string
	 */
	public $urlComponent;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $mediaFile;
	/**
	 * @access public
	 * @var TextFileEncoding
	 */
	public $textFileEncoding;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var FileEncoding
	 */
	public $encoding;
	/**
	 * @access public
	 * @var string
	 */
	public $altTagCaption;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isOnline;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var string
	 */
	public $class;
	/**
	 * @access public
	 * @var boolean
	 */
	public $bundleable;
	/**
	 * @access public
	 * @var string
	 */
	public $department;
	/**
	 * @access public
	 * @var boolean
	 */
	public $hideInBundle;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isPrivate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $owner;
	/**
	 * @access public
	 * @var string
	 */
	public $caption;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $storeDisplayThumbnail;
	/**
	 * @access public
	 * @var string
	 */
	public $siteDescription;
	/**
	 * @access public
	 * @var string
	 */
	public $featuredDescription;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var FileSiteCategoryList
	 */
	public $siteCategoryList;
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
		"attachFrom" => "FileAttachFrom",
		"mediaTypeName" => "string",
		"fileType" => "MediaType",
		"content" => "base64Binary",
		"folder" => "RecordRef",
		"fileSize" => "float",
		"url" => "string",
		"urlComponent" => "string",
		"mediaFile" => "RecordRef",
		"textFileEncoding" => "TextFileEncoding",
		"description" => "string",
		"encoding" => "FileEncoding",
		"altTagCaption" => "string",
		"isOnline" => "boolean",
		"isInactive" => "boolean",
		"class" => "string",
		"bundleable" => "boolean",
		"department" => "string",
		"hideInBundle" => "boolean",
		"isPrivate" => "boolean",
		"owner" => "RecordRef",
		"caption" => "string",
		"storeDisplayThumbnail" => "RecordRef",
		"siteDescription" => "string",
		"featuredDescription" => "string",
		"lastModifiedDate" => "dateTime",
		"createdDate" => "dateTime",
		"siteCategoryList" => "FileSiteCategoryList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
