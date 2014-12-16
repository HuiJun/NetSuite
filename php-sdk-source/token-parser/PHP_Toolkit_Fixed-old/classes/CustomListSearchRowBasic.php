<?php

class CustomListSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $description;
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
	 * @var SearchColumnBooleanField[]
	 */
	public $isOrdered;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $owner;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $scriptId;

	static $paramtypesmap = array(
		"description" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"isOrdered" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
		"owner" => "SearchColumnSelectField[]",
		"scriptId" => "SearchColumnStringField[]",
	);
    public static function create()
    {
        return new static();
    }
}
