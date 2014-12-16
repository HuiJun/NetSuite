<?php

class AppDefinitionPackagesList {
	/**
	 * @access public
	 * @var AppDefinitionPackages[]
	 */
	public $packages;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"packages" => "AppDefinitionPackages[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
