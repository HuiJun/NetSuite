<?php

class TaxType extends Record {
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var TaxTypeNexusesTaxList
	 */
	public $nexusesTaxList;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $externalId;

	static $paramtypesmap = array(
		"name" => "string",
		"description" => "string",
		"nexusesTaxList" => "TaxTypeNexusesTaxList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
