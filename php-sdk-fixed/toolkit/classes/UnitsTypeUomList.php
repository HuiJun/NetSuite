<?php

class UnitsTypeUomList {
	/**
	 * @access public
	 * @var UnitsTypeUom[]
	 */
	public $uom;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"uom" => "UnitsTypeUom[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
