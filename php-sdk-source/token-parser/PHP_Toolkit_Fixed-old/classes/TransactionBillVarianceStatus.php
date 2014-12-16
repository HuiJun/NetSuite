<?php

class TransactionBillVarianceStatus {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _journalNotPosted = "_journalNotPosted";
	/**
	 * @var string
	 */
	const _journalPosted = "_journalPosted";
	/**
	 * @var string
	 */
	const _noVariances = "_noVariances";
    public static function create()
    {
        return new static();
    }
}
