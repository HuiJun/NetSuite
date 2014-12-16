<?php

class EmailPreference {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _default = "_default";
	/**
	 * @var string
	 */
	const _hTML = "_hTML";
	/**
	 * @var string
	 */
	const _pDF = "_pDF";
    public static function create()
    {
        return new static();
    }
}
