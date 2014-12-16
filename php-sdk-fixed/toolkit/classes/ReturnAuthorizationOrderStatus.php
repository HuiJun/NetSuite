<?php

class ReturnAuthorizationOrderStatus {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _pendingApproval = "_pendingApproval";
	/**
	 * @var string
	 */
	const _pendingReceipt = "_pendingReceipt";
    public static function create()
    {
        return new static();
    }
}
