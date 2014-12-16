<?php

class DurationUnit {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const hour = "hour";
    public static function create()
    {
        return new static();
    }
}
