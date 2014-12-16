<?php

class Campaign extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var string
	 */
	public $campaignId;
	/**
	 * @access public
	 * @var string
	 */
	public $title;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $category;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $owner;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $startDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $endDate;
	/**
	 * @access public
	 * @var string
	 */
	public $url;
	/**
	 * @access public
	 * @var float
	 */
	public $baseCost;
	/**
	 * @access public
	 * @var float
	 */
	public $cost;
	/**
	 * @access public
	 * @var float
	 */
	public $expectedRevenue;
	/**
	 * @access public
	 * @var string
	 */
	public $message;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var boolean
	 */
	public $local;
	/**
	 * @access public
	 * @var float
	 */
	public $totalRevenue;
	/**
	 * @access public
	 * @var float
	 */
	public $roi;
	/**
	 * @access public
	 * @var float
	 */
	public $profit;
	/**
	 * @access public
	 * @var float
	 */
	public $costPerCustomer;
	/**
	 * @access public
	 * @var float
	 */
	public $convCostPerCustomer;
	/**
	 * @access public
	 * @var integer
	 */
	public $conversions;
	/**
	 * @access public
	 * @var integer
	 */
	public $leadsGenerated;
	/**
	 * @access public
	 * @var integer
	 */
	public $uniqueVisitors;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $vertical;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $audience;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $offer;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $promotionCode;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $itemList;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $family;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $searchEngine;
	/**
	 * @access public
	 * @var string
	 */
	public $keyword;
	/**
	 * @access public
	 * @var CampaignEmailList
	 */
	public $campaignEmailList;
	/**
	 * @access public
	 * @var CampaignDirectMailList
	 */
	public $campaignDirectMailList;
	/**
	 * @access public
	 * @var CampaignEventList
	 */
	public $campaignEventList;
	/**
	 * @access public
	 * @var CampaignEventResponseList
	 */
	public $eventResponseList;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;
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
		"customForm" => "RecordRef",
		"campaignId" => "string",
		"title" => "string",
		"category" => "RecordRef",
		"owner" => "RecordRef",
		"startDate" => "dateTime",
		"endDate" => "dateTime",
		"url" => "string",
		"baseCost" => "float",
		"cost" => "float",
		"expectedRevenue" => "float",
		"message" => "string",
		"isInactive" => "boolean",
		"local" => "boolean",
		"totalRevenue" => "float",
		"roi" => "float",
		"profit" => "float",
		"costPerCustomer" => "float",
		"convCostPerCustomer" => "float",
		"conversions" => "integer",
		"leadsGenerated" => "integer",
		"uniqueVisitors" => "integer",
		"vertical" => "RecordRef",
		"audience" => "RecordRef",
		"offer" => "RecordRef",
		"promotionCode" => "RecordRef",
		"itemList" => "RecordRefList",
		"family" => "RecordRef",
		"searchEngine" => "RecordRef",
		"keyword" => "string",
		"campaignEmailList" => "CampaignEmailList",
		"campaignDirectMailList" => "CampaignDirectMailList",
		"campaignEventList" => "CampaignEventList",
		"eventResponseList" => "CampaignEventResponseList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
