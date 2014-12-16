<?php

class AccountingPeriodFiscalCalendarsList {
	/**
	 * @access public
	 * @var AccountingPeriodFiscalCalendars[]
	 */
	public $accountingPeriodFiscalCalendars;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"accountingPeriodFiscalCalendars" => "AccountingPeriodFiscalCalendars[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
