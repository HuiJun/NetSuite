<?php

class MatrixOptionList {
	/**
	 * @access public
	 * @var SelectCustomFieldRef[]
	 */
	public $matrixOption;

	static $paramtypesmap = array(
		"matrixOption" => "SelectCustomFieldRef[]",
	);
    public static function create()
    {
        return new static();
    }
}
