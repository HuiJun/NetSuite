<?php

class ResourceAllocationAllocationUnit {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _hours = "_hours";
	/**
	 * @var string
	 */
	const _percentOfTime = "_percentOfTime";
    public static function create()
    {
        return new static();
    }
}
