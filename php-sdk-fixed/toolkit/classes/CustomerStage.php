<?php

class CustomerStage {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _customer = "_customer";
	/**
	 * @var string
	 */
	const _lead = "_lead";
	/**
	 * @var string
	 */
	const _prospect = "_prospect";
    public static function create()
    {
        return new static();
    }
}
