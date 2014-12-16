<?php

class PaycheckJournalEmployeeTaxList {
	/**
	 * @access public
	 * @var PaycheckJournalEmployeeTax[]
	 */
	public $paycheckJournalEmployeeTax;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"paycheckJournalEmployeeTax" => "PaycheckJournalEmployeeTax[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
