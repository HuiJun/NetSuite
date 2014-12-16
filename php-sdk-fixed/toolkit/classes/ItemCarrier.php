<?php

class ItemCarrier {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _fedexUspsMore = "_fedexUspsMore";
	/**
	 * @var string
	 */
	const _ups = "_ups";
    public static function create()
    {
        return new static();
    }
}
