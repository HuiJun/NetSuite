<?php

class SalesOrderOrderStatus {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _pendingApproval = "_pendingApproval";
	/**
	 * @var string
	 */
	const _pendingFulfillment = "_pendingFulfillment";
	/**
	 * @var string
	 */
	const _cancelled = "_cancelled";
	/**
	 * @var string
	 */
	const _partiallyFulfilled = "_partiallyFulfilled";
	/**
	 * @var string
	 */
	const _pendingBillingPartFulfilled = "_pendingBillingPartFulfilled";
	/**
	 * @var string
	 */
	const _pendingBilling = "_pendingBilling";
	/**
	 * @var string
	 */
	const _fullyBilled = "_fullyBilled";
	/**
	 * @var string
	 */
	const _closed = "_closed";
	/**
	 * @var string
	 */
	const _undefined = "_undefined";
    public static function create()
    {
        return new static();
    }
}
