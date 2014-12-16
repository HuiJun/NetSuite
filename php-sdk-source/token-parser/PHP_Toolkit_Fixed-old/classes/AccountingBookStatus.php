<?php

class AccountingBookStatus {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _active = "_active";
	/**
	 * @var string
	 */
	const _inactive = "_inactive";
	/**
	 * @var string
	 */
	const _pending = "_pending";
    public static function create()
    {
        return new static();
    }
}
