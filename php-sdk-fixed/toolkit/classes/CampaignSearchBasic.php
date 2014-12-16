<?php

class CampaignSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $audience;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $baseCost;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $campaignEventType;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $campaignId;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $category;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $channel;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $cost;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $event;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $expectedRevenue;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $family;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $group;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isSalesCampaign;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $keyword;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $manager;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $managerRole;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $number;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $offer;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $promoCode;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $recipient;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $response;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $responseCategory;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $responseCode;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $responseComments;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $responseDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $scheduleDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $searchEngine;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subscription;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $template;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $vertical;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"audience" => "SearchMultiSelectField",
		"baseCost" => "SearchDoubleField",
		"campaignEventType" => "SearchEnumMultiSelectField",
		"campaignId" => "SearchStringField",
		"category" => "SearchMultiSelectField",
		"channel" => "SearchMultiSelectField",
		"cost" => "SearchDoubleField",
		"createdDate" => "SearchDateField",
		"endDate" => "SearchDateField",
		"event" => "SearchStringField",
		"expectedRevenue" => "SearchDoubleField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"family" => "SearchMultiSelectField",
		"group" => "SearchMultiSelectField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"isSalesCampaign" => "SearchBooleanField",
		"item" => "SearchMultiSelectField",
		"keyword" => "SearchStringField",
		"lastModifiedDate" => "SearchDateField",
		"manager" => "SearchMultiSelectField",
		"managerRole" => "SearchMultiSelectField",
		"number" => "SearchLongField",
		"offer" => "SearchMultiSelectField",
		"promoCode" => "SearchMultiSelectField",
		"recipient" => "SearchMultiSelectField",
		"response" => "SearchEnumMultiSelectField",
		"responseCategory" => "SearchEnumMultiSelectField",
		"responseCode" => "SearchLongField",
		"responseComments" => "SearchStringField",
		"responseDate" => "SearchDateField",
		"scheduleDate" => "SearchDateField",
		"searchEngine" => "SearchMultiSelectField",
		"startDate" => "SearchDateField",
		"status" => "SearchEnumMultiSelectField",
		"subscription" => "SearchMultiSelectField",
		"template" => "SearchMultiSelectField",
		"title" => "SearchStringField",
		"vertical" => "SearchMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
    public static function create()
    {
        return new static();
    }
}
