<?php

class CustomizationRef extends RecordRef {
	/**
	 * @access public
	 * @var string
	 */
	public $scriptId;

	static $paramtypesmap = array(
		"scriptId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
