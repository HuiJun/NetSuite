<?php

class StatusDetailType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const ERROR = "ERROR";
	/**
	 * @var string
	 */
	const WARN = "WARN";
	/**
	 * @var string
	 */
	const INFO = "INFO";
    public static function create()
    {
        return new static();
    }
}
