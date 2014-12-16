<?php

class RecordRef extends BaseRef {
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
	 * @var RecordType
	 */
	public $type;

	static $paramtypesmap = array(
		"internalId" => "string",
		"externalId" => "string",
		"type" => "RecordType",
	);
    public static function create()
    {
        return new static();
    }
}
