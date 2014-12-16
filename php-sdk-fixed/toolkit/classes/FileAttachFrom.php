<?php

class FileAttachFrom {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _computer = "_computer";
	/**
	 * @var string
	 */
	const _web = "_web";
    public static function create()
    {
        return new static();
    }
}
