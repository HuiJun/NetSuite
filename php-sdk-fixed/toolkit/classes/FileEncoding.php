<?php

class FileEncoding {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _autoDetect = "_autoDetect";
	/**
	 * @var string
	 */
	const _shiftJis = "_shiftJis";
	/**
	 * @var string
	 */
	const _utf8 = "_utf8";
	/**
	 * @var string
	 */
	const _windows1252 = "_windows1252";
    public static function create()
    {
        return new static();
    }
}
