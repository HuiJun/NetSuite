<?php

class ItemCostAccountingStatus {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _complete = "_complete";
	/**
	 * @var string
	 */
	const _failed = "_failed";
	/**
	 * @var string
	 */
	const _pending = "_pending";
	/**
	 * @var string
	 */
	const _processing = "_processing";
    public static function create()
    {
        return new static();
    }
}
