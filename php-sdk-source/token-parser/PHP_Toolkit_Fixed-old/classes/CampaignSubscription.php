<?php

class CampaignSubscription extends Record {
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var boolean
	 */
	public $subscribedByDefault;
	/**
	 * @access public
	 * @var boolean
	 */
	public $unsubscribed;
	/**
	 * @access public
	 * @var string
	 */
	public $externalName;
	/**
	 * @access public
	 * @var string
	 */
	public $externalDescription;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $externalId;

	static $paramtypesmap = array(
		"name" => "string",
		"description" => "string",
		"subscribedByDefault" => "boolean",
		"unsubscribed" => "boolean",
		"externalName" => "string",
		"externalDescription" => "string",
		"isInactive" => "boolean",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
