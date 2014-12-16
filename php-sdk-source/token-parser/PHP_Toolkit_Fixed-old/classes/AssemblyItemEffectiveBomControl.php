<?php

class AssemblyItemEffectiveBomControl {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _effectiveDate = "_effectiveDate";
	/**
	 * @var string
	 */
	const _revisionControl = "_revisionControl";
    public static function create()
    {
        return new static();
    }
}
