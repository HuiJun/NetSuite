<?php

class TransactionChargeType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _concession = "_concession";
	/**
	 * @var string
	 */
	const _fixedDate = "_fixedDate";
	/**
	 * @var string
	 */
	const _fixedUsage = "_fixedUsage";
	/**
	 * @var string
	 */
	const _milestone = "_milestone";
	/**
	 * @var string
	 */
	const _oneTime = "_oneTime";
	/**
	 * @var string
	 */
	const _penalty = "_penalty";
	/**
	 * @var string
	 */
	const _projectProgress = "_projectProgress";
	/**
	 * @var string
	 */
	const _recurringService = "_recurringService";
	/**
	 * @var string
	 */
	const _timeBased = "_timeBased";
	/**
	 * @var string
	 */
	const _variableUsage = "_variableUsage";
    public static function create()
    {
        return new static();
    }
}
