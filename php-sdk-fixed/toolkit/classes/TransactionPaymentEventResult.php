<?php

class TransactionPaymentEventResult {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _accept = "_accept";
	/**
	 * @var string
	 */
	const _holdOverride = "_holdOverride";
	/**
	 * @var string
	 */
	const _paymentHold = "_paymentHold";
	/**
	 * @var string
	 */
	const _reject = "_reject";
    public static function create()
    {
        return new static();
    }
}
