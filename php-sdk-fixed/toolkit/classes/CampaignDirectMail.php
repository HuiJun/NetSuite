<?php

class CampaignDirectMail {
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $campaignGroup;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $template;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subscription;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $channel;
	/**
	 * @access public
	 * @var float
	 */
	public $cost;
	/**
	 * @access public
	 * @var CampaignCampaignDirectMailStatus
	 */
	public $status;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $dateScheduled;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $promoCode;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"internalId" => "string",
		"campaignGroup" => "RecordRef",
		"template" => "RecordRef",
		"description" => "string",
		"subscription" => "RecordRef",
		"channel" => "RecordRef",
		"cost" => "float",
		"status" => "CampaignCampaignDirectMailStatus",
		"dateScheduled" => "dateTime",
		"promoCode" => "RecordRef",
		"customFieldList" => "CustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
