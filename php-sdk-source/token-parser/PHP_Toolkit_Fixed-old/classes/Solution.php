<?php

class Solution extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var string
	 */
	public $solutionCode;
	/**
	 * @access public
	 * @var string
	 */
	public $title;
	/**
	 * @access public
	 * @var string
	 */
	public $message;
	/**
	 * @access public
	 * @var SolutionStatus
	 */
	public $status;
	/**
	 * @access public
	 * @var boolean
	 */
	public $displayOnline;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $assigned;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var string
	 */
	public $longDescription;
	/**
	 * @access public
	 * @var SolutionTopicsList
	 */
	public $topicsList;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SolutionsList
	 */
	public $solutionsList;
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
		"customForm" => "RecordRef",
		"solutionCode" => "string",
		"title" => "string",
		"message" => "string",
		"status" => "SolutionStatus",
		"displayOnline" => "boolean",
		"assigned" => "RecordRef",
		"isInactive" => "boolean",
		"longDescription" => "string",
		"topicsList" => "SolutionTopicsList",
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"solutionsList" => "SolutionsList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
