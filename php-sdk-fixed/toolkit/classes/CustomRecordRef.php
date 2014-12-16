<?php

class CustomRecordRef extends BaseRef {
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
		"internalId" => "string",
		"externalId" => "string",
		"typeId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
