<?php

class ChargeStage {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _hold = "_hold";
	/**
	 * @var string
	 */
	const _nonBillable = "_nonBillable";
	/**
	 * @var string
	 */
	const _processed = "_processed";
	/**
	 * @var string
	 */
	const _ready = "_ready";
    public static function create()
    {
        return new static();
    }
}
