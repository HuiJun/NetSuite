<?php

class SupportCaseEscalateToList {
	/**
	 * @access public
	 * @var SupportCaseEscalateTo[]
	 */
	public $escalateTo;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"escalateTo" => "SupportCaseEscalateTo[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
