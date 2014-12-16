<?php

class CampaignCampaignEventType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _default = "_default";
	/**
	 * @var string
	 */
	const _directMail = "_directMail";
	/**
	 * @var string
	 */
	const _email = "_email";
	/**
	 * @var string
	 */
	const _integration = "_integration";
	/**
	 * @var string
	 */
	const _leadNurturingEmail = "_leadNurturingEmail";
	/**
	 * @var string
	 */
	const _other = "_other";
    public static function create()
    {
        return new static();
    }
}
