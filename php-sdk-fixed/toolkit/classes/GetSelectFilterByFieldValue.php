<?php

class GetSelectFilterByFieldValue {
	/**
	 * @access public
	 * @var string
	 */
	public $sublist;
	/**
	 * @access public
	 * @var string
	 */
	public $field;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;

	static $paramtypesmap = array(
		"sublist" => "string",
		"field" => "string",
		"internalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
