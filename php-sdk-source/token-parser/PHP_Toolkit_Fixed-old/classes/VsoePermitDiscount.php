<?php

class VsoePermitDiscount {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _asAllowed = "_asAllowed";
	/**
	 * @var string
	 */
	const _never = "_never";
    public static function create()
    {
        return new static();
    }
}
