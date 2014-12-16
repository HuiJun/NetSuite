<?php

class CampaignCampaignEmailStatus {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _execute = "_execute";
	/**
	 * @var string
	 */
	const _inProgress = "_inProgress";
	/**
	 * @var string
	 */
	const _notStarted = "_notStarted";
	/**
	 * @var string
	 */
	const _sent = "_sent";
    public static function create()
    {
        return new static();
    }
}
