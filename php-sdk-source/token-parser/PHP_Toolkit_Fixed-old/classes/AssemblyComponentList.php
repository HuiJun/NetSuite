<?php

class AssemblyComponentList {
	/**
	 * @access public
	 * @var AssemblyComponent[]
	 */
	public $component;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"component" => "AssemblyComponent[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
