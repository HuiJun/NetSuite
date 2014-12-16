<?php

class ListOrRecordRef {
	/**
	 * @access public
	 * @var string
	 */
	public $name;
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
	/**
	 * @access public
	 * @var string
	 */
	public $typeId;

	static $paramtypesmap = array(
		"name" => "string",
		"internalId" => "string",
		"externalId" => "string",
		"typeId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
