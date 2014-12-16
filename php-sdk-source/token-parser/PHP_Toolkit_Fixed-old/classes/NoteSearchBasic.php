<?php

class NoteSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $author;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $direction;
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
	public $note;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $noteDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $noteType;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"author" => "SearchMultiSelectField",
		"direction" => "SearchBooleanField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"note" => "SearchStringField",
		"noteDate" => "SearchDateField",
		"noteType" => "SearchMultiSelectField",
		"title" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
