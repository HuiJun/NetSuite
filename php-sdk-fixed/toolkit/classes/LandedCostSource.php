<?php

class LandedCostSource {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _manual = "_manual";
	/**
	 * @var string
	 */
	const _otherTransaction = "_otherTransaction";
	/**
	 * @var string
	 */
	const _otherTransactionExcludeTax = "_otherTransactionExcludeTax";
	/**
	 * @var string
	 */
	const _thisTransaction = "_thisTransaction";
    public static function create()
    {
        return new static();
    }
}
