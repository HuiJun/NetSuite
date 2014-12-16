<?php

class ForecastType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _omitted = "_omitted";
	/**
	 * @var string
	 */
	const _worstCase = "_worstCase";
	/**
	 * @var string
	 */
	const _mostLikely = "_mostLikely";
	/**
	 * @var string
	 */
	const _upside = "_upside";
    public static function create()
    {
        return new static();
    }
}
