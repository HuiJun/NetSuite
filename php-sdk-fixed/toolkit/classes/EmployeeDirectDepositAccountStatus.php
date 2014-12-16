<?php

class EmployeeDirectDepositAccountStatus {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _active = "_active";
	/**
	 * @var string
	 */
	const _pending = "_pending";
	/**
	 * @var string
	 */
	const _verifying = "_verifying";
	/**
	 * @var string
	 */
	const _failed = "_failed";
	/**
	 * @var string
	 */
	const _inactive = "_inactive";
    public static function create()
    {
        return new static();
    }
}
