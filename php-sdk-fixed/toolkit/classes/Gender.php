<?php

class Gender {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _omitted = "_omitted";
	/**
	 * @var string
	 */
	const _female = "_female";
	/**
	 * @var string
	 */
	const _male = "_male";
    public static function create()
    {
        return new static();
    }
}
