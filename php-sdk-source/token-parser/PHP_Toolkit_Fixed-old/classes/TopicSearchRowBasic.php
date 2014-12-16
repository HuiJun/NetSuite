<?php

class TopicSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;

	static $paramtypesmap = array(
		"description" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
	);
    public static function create()
    {
        return new static();
    }
}
