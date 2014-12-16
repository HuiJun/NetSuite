<?php

class Location extends Record {
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $parent;
	/**
	 * @access public
	 * @var boolean
	 */
	public $includeChildren;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $subsidiaryList;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var string
	 */
	public $tranPrefix;
	/**
	 * @access public
	 * @var Address
	 */
	public $mainAddress;
	/**
	 * @access public
	 * @var Address
	 */
	public $returnAddress;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $logo;
	/**
	 * @access public
	 * @var boolean
	 */
	public $makeInventoryAvailable;
	/**
	 * @access public
	 * @var boolean
	 */
	public $makeInventoryAvailableStore;
	/**
	 * @access public
	 * @var ClassTranslationList
	 */
	public $classTranslationList;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;
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
		"parent" => "RecordRef",
		"includeChildren" => "boolean",
		"subsidiaryList" => "RecordRefList",
		"isInactive" => "boolean",
		"tranPrefix" => "string",
		"mainAddress" => "Address",
		"returnAddress" => "Address",
		"logo" => "RecordRef",
		"makeInventoryAvailable" => "boolean",
		"makeInventoryAvailableStore" => "boolean",
		"classTranslationList" => "ClassTranslationList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
