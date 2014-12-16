<?php

class FldFilterSelList {
	/**
	 * @access public
	 * @var RecordRef[]
	 */
	public $fldFilterSel;

	static $paramtypesmap = array(
		"fldFilterSel" => "RecordRef[]",
	);
    public static function create()
    {
        return new static();
    }
}
