<?php

class AvsMatchCode {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _n = "_n";
	/**
	 * @var string
	 */
	const _x = "_x";
	/**
	 * @var string
	 */
	const _y = "_y";
    public static function create()
    {
        return new static();
    }
}
