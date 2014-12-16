<?php

class CustomListSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $description;
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
	public $isOrdered;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $owner;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $scriptId;

	static $paramtypesmap = array(
		"description" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"isOrdered" => "SearchBooleanField",
		"name" => "SearchStringField",
		"owner" => "SearchMultiSelectField",
		"scriptId" => "SearchStringField",
	);
    public static function create()
    {
        return new static();
    }
}
