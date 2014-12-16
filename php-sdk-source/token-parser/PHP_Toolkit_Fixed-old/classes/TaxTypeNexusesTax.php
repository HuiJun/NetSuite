<?php

class TaxTypeNexusesTax {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $nexus;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $saleTaxAcct;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $purchTaxAcct;

	static $paramtypesmap = array(
		"nexus" => "RecordRef",
		"description" => "string",
		"saleTaxAcct" => "RecordRef",
		"purchTaxAcct" => "RecordRef",
	);
    public static function create()
    {
        return new static();
    }
}
