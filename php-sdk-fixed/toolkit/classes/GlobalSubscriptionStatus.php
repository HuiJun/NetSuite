<?php

class GlobalSubscriptionStatus {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _confirmedOptIn = "_confirmedOptIn";
	/**
	 * @var string
	 */
	const _confirmedOptOut = "_confirmedOptOut";
	/**
	 * @var string
	 */
	const _softOptIn = "_softOptIn";
	/**
	 * @var string
	 */
	const _softOptOut = "_softOptOut";
    public static function create()
    {
        return new static();
    }
}
