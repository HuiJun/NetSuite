<?php

class VsoeDeferral {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _deferBundleUntilDelivered = "_deferBundleUntilDelivered";
	/**
	 * @var string
	 */
	const _deferUntilItemDelivered = "_deferUntilItemDelivered";
    public static function create()
    {
        return new static();
    }
}
