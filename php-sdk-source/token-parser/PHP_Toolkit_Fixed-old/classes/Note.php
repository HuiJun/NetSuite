<?php

class Note extends Record {
	/**
	 * @access public
	 * @var string
	 */
	public $title;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $noteType;
	/**
	 * @access public
	 * @var NoteDirection
	 */
	public $direction;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $noteDate;
	/**
	 * @access public
	 * @var string
	 */
	public $note;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $activity;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $author;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $entity;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $folder;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $media;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $record;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $recordType;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $topic;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $transaction;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
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
		"title" => "string",
		"noteType" => "RecordRef",
		"direction" => "NoteDirection",
		"noteDate" => "dateTime",
		"note" => "string",
		"lastModifiedDate" => "dateTime",
		"activity" => "RecordRef",
		"author" => "RecordRef",
		"entity" => "RecordRef",
		"folder" => "RecordRef",
		"item" => "RecordRef",
		"media" => "RecordRef",
		"record" => "RecordRef",
		"recordType" => "RecordRef",
		"topic" => "RecordRef",
		"transaction" => "RecordRef",
		"customForm" => "RecordRef",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
