<?php

class GetSelectFilterByFieldValueList {
	/**
	 * @access public
	 * @var GetSelectFilterByFieldValue[]
	 */
	public $filterBy;

	static $paramtypesmap = array(
		"filterBy" => "GetSelectFilterByFieldValue[]",
	);
    public static function create()
    {
        return new static();
    }
}
