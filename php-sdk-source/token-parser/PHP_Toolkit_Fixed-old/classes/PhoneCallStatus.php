<?php

class PhoneCallStatus {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _completed = "_completed";
	/**
	 * @var string
	 */
	const _scheduled = "_scheduled";
    public static function create()
    {
        return new static();
    }
}
