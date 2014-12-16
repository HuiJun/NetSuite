<?php

class CustomList extends Record {
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $owner;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isOrdered;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isMatrixOption;
	/**
	 * @access public
	 * @var string
	 */
	public $scriptId;
	/**
	 * @access public
	 * @var boolean
	 */
	public $convertToCustomRecord;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var CustomListCustomValueList
	 */
	public $customValueList;
	/**
	 * @access public
	 * @var CustomListTranslationsList
	 */
	public $translationsList;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;

	static $paramtypesmap = array(
		"name" => "string",
		"owner" => "RecordRef",
		"isOrdered" => "boolean",
		"description" => "string",
		"isMatrixOption" => "boolean",
		"scriptId" => "string",
		"convertToCustomRecord" => "boolean",
		"isInactive" => "boolean",
		"customValueList" => "CustomListCustomValueList",
		"translationsList" => "CustomListTranslationsList",
		"internalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
