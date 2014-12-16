<?php

class NoteSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $author;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $direction;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $note;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $noteDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $noteType;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"author" => "SearchColumnSelectField[]",
		"direction" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"note" => "SearchColumnStringField[]",
		"noteDate" => "SearchColumnDateField[]",
		"noteType" => "SearchColumnStringField[]",
		"title" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
