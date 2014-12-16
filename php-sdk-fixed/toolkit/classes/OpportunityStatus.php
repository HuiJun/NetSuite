<?php

class OpportunityStatus {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _closedLost = "_closedLost";
	/**
	 * @var string
	 */
	const _closedWon = "_closedWon";
	/**
	 * @var string
	 */
	const _inProgress = "_inProgress";
	/**
	 * @var string
	 */
	const _issuedEstimate = "_issuedEstimate";
    public static function create()
    {
        return new static();
    }
}
