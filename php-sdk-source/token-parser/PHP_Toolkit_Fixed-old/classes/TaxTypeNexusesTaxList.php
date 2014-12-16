<?php

class TaxTypeNexusesTaxList {
	/**
	 * @access public
	 * @var TaxTypeNexusesTax[]
	 */
	public $nexusesTax;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"nexusesTax" => "TaxTypeNexusesTax[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
