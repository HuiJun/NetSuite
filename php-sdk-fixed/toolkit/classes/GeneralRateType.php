<?php

class GeneralRateType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _average = "_average";
	/**
	 * @var string
	 */
	const _current = "_current";
	/**
	 * @var string
	 */
	const _historical = "_historical";
    public static function create()
    {
        return new static();
    }
}
