<?php

class InitializeAuxRef extends BaseRef {
	/**
	 * @access public
	 * @var InitializeAuxRefType
	 */
	public $type;
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
		"type" => "InitializeAuxRefType",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
