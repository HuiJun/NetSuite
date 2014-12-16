<?php

class AccountingTransactionRevCommitStatus {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _committed = "_committed";
	/**
	 * @var string
	 */
	const _partiallyCommitted = "_partiallyCommitted";
	/**
	 * @var string
	 */
	const _pendingCommitment = "_pendingCommitment";
    public static function create()
    {
        return new static();
    }
}
