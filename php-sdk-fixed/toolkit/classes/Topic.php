<?php

class Topic extends Record {
	/**
	 * @access public
	 * @var string
	 */
	public $title;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $parentTopic;
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
	 * @var string
	 */
	public $longDescription;
	/**
	 * @access public
	 * @var TopicSolutionList
	 */
	public $solutionList;
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
		"parentTopic" => "RecordRef",
		"description" => "string",
		"isInactive" => "boolean",
		"longDescription" => "string",
		"solutionList" => "TopicSolutionList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
