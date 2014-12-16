<?php

class ItemAtpMethod {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _cumulativeAtpWithLookAhead = "_cumulativeAtpWithLookAhead";
	/**
	 * @var string
	 */
	const _discreteAtp = "_discreteAtp";
    public static function create()
    {
        return new static();
    }
}
