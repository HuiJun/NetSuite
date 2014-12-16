<?php

class SalesOrderItemCommitInventory {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _availableQty = "_availableQty";
	/**
	 * @var string
	 */
	const _completeQty = "_completeQty";
	/**
	 * @var string
	 */
	const _doNotCommit = "_doNotCommit";
    public static function create()
    {
        return new static();
    }
}
