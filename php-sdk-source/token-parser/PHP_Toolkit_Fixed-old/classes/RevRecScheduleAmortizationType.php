<?php

class RevRecScheduleAmortizationType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _standard = "_standard";
	/**
	 * @var string
	 */
	const _variable = "_variable";
    public static function create()
    {
        return new static();
    }
}
