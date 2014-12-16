<?php

class TaskPriority {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _high = "_high";
	/**
	 * @var string
	 */
	const _low = "_low";
	/**
	 * @var string
	 */
	const _medium = "_medium";
    public static function create()
    {
        return new static();
    }
}
