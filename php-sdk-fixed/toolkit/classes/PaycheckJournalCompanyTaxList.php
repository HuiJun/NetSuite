<?php

class PaycheckJournalCompanyTaxList {
	/**
	 * @access public
	 * @var PaycheckJournalCompanyTax[]
	 */
	public $paycheckJournalCompanyTax;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"paycheckJournalCompanyTax" => "PaycheckJournalCompanyTax[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
