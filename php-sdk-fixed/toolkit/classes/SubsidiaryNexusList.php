<?php

class SubsidiaryNexusList {
	/**
	 * @access public
	 * @var SubsidiaryNexus[]
	 */
	public $nexus;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"nexus" => "SubsidiaryNexus[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
