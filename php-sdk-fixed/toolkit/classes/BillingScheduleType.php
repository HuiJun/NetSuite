<?php

class BillingScheduleType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _chargeBased = "_chargeBased";
	/**
	 * @var string
	 */
	const _fixedBidInterval = "_fixedBidInterval";
	/**
	 * @var string
	 */
	const _fixedBidMilestone = "_fixedBidMilestone";
	/**
	 * @var string
	 */
	const _standard = "_standard";
	/**
	 * @var string
	 */
	const _timeAndMaterials = "_timeAndMaterials";
    public static function create()
    {
        return new static();
    }
}
