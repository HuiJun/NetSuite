<?php

class CustomerGroupPricing {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $group;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $level;

	static $paramtypesmap = array(
		"group" => "RecordRef",
		"level" => "RecordRef",
	);
    public static function create()
    {
        return new static();
    }
}
