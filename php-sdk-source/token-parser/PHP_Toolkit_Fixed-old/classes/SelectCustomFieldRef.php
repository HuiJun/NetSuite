<?php

class SelectCustomFieldRef extends CustomFieldRef {
	/**
	 * @access public
	 * @var ListOrRecordRef
	 */
	public $value;

	static $paramtypesmap = array(
		"value" => "ListOrRecordRef",
	);
    public static function create()
    {
        return new static();
    }
}
