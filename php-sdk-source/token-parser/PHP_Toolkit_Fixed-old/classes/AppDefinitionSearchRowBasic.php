<?php

class AppDefinitionSearchRowBasic extends SearchRowBasic {
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
	 * @var SearchColumnStringField[]
	 */
	public $name;

	static $paramtypesmap = array(
		"description" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"name" => "SearchColumnStringField[]",
	);
    public static function create()
    {
        return new static();
    }
}
