<?php

class EmployeeCommissionPaymentPreference {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _accountsPayable = "_accountsPayable";
	/**
	 * @var string
	 */
	const _payroll = "_payroll";
	/**
	 * @var string
	 */
	const _systemPreference = "_systemPreference";
    public static function create()
    {
        return new static();
    }
}
