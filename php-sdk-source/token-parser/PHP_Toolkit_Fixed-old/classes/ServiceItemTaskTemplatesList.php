<?php

class ServiceItemTaskTemplatesList {
	/**
	 * @access public
	 * @var ServiceItemTaskTemplates[]
	 */
	public $taskTemplates;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"taskTemplates" => "ServiceItemTaskTemplates[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
