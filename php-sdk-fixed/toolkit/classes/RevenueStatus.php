<?php

class RevenueStatus {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _pending = "_pending";
	/**
	 * @var string
	 */
	const _inProgress = "_inProgress";
	/**
	 * @var string
	 */
	const _completed = "_completed";
	/**
	 * @var string
	 */
	const _onRevCommitment = "_onRevCommitment";
    public static function create()
    {
        return new static();
    }
}
