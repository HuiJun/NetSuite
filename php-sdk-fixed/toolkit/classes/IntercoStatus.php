<?php

class IntercoStatus {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _paired = "_paired";
	/**
	 * @var string
	 */
	const _pending = "_pending";
	/**
	 * @var string
	 */
	const _rejected = "_rejected";
    public static function create()
    {
        return new static();
    }
}
