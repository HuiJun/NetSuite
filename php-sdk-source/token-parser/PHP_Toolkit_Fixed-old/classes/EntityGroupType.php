<?php

class EntityGroupType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _contact = "_contact";
	/**
	 * @var string
	 */
	const _customer = "_customer";
	/**
	 * @var string
	 */
	const _employee = "_employee";
	/**
	 * @var string
	 */
	const _partner = "_partner";
	/**
	 * @var string
	 */
	const _vendor = "_vendor";
    public static function create()
    {
        return new static();
    }
}
