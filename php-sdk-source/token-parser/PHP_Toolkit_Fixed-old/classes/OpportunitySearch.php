<?php

class OpportunitySearch extends SearchRecord {
	/**
	 * @access public
	 * @var OpportunitySearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var TransactionSearchBasic
	 */
	public $actualJoin;
	/**
	 * @access public
	 * @var PhoneCallSearchBasic
	 */
	public $callJoin;
	/**
	 * @access public
	 * @var CustomerSearchBasic
	 */
	public $customerJoin;
	/**
	 * @access public
	 * @var ContactSearchBasic
	 */
	public $decisionMakerJoin;
	/**
	 * @access public
	 * @var TransactionSearchBasic
	 */
	public $estimateJoin;
	/**
	 * @access public
	 * @var CalendarEventSearchBasic
	 */
	public $eventJoin;
	/**
	 * @access public
	 * @var FileSearchBasic
	 */
	public $fileJoin;
	/**
	 * @access public
	 * @var ItemSearchBasic
	 */
	public $itemJoin;
	/**
	 * @access public
	 * @var CampaignSearchBasic
	 */
	public $leadSourceJoin;
	/**
	 * @access public
	 * @var MessageSearchBasic
	 */
	public $messagesJoin;
	/**
	 * @access public
	 * @var TransactionSearchBasic
	 */
	public $orderJoin;
	/**
	 * @access public
	 * @var OriginatingLeadSearchBasic
	 */
	public $originatingLeadJoin;
	/**
	 * @access public
	 * @var PartnerSearchBasic
	 */
	public $partnerJoin;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $salesRepJoin;
	/**
	 * @access public
	 * @var TaskSearchBasic
	 */
	public $taskJoin;
	/**
	 * @access public
	 * @var NoteSearchBasic
	 */
	public $userNotesJoin;
	/**
	 * @access public
	 * @var CustomSearchJoin[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "OpportunitySearchBasic",
		"actualJoin" => "TransactionSearchBasic",
		"callJoin" => "PhoneCallSearchBasic",
		"customerJoin" => "CustomerSearchBasic",
		"decisionMakerJoin" => "ContactSearchBasic",
		"estimateJoin" => "TransactionSearchBasic",
		"eventJoin" => "CalendarEventSearchBasic",
		"fileJoin" => "FileSearchBasic",
		"itemJoin" => "ItemSearchBasic",
		"leadSourceJoin" => "CampaignSearchBasic",
		"messagesJoin" => "MessageSearchBasic",
		"orderJoin" => "TransactionSearchBasic",
		"originatingLeadJoin" => "OriginatingLeadSearchBasic",
		"partnerJoin" => "PartnerSearchBasic",
		"salesRepJoin" => "EmployeeSearchBasic",
		"taskJoin" => "TaskSearchBasic",
		"userNotesJoin" => "NoteSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
    public static function create()
    {
        return new static();
    }
}
