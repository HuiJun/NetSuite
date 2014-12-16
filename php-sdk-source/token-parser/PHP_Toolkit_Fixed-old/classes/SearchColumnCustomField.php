<?php

class SearchColumnCustomField {
	/**
	 * @access public
	 * @var string
	 */
	public $customLabel;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $scriptId;

	static $paramtypesmap = array(
		"customLabel" => "string",
		"internalId" => "string",
		"scriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
