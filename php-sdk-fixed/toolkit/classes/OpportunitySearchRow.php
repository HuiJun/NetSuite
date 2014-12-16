<?php

class OpportunitySearchRow extends SearchRow {
	/**
	 * @access public
	 * @var OpportunitySearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var TransactionSearchRowBasic
	 */
	public $actualJoin;
	/**
	 * @access public
	 * @var PhoneCallSearchRowBasic
	 */
	public $callJoin;
	/**
	 * @access public
	 * @var CustomerSearchRowBasic
	 */
	public $customerJoin;
	/**
	 * @access public
	 * @var ContactSearchRowBasic
	 */
	public $decisionMakerJoin;
	/**
	 * @access public
	 * @var TransactionSearchRowBasic
	 */
	public $estimateJoin;
	/**
	 * @access public
	 * @var CalendarEventSearchRowBasic
	 */
	public $eventJoin;
	/**
	 * @access public
	 * @var FileSearchRowBasic
	 */
	public $fileJoin;
	/**
	 * @access public
	 * @var ItemSearchRowBasic
	 */
	public $itemJoin;
	/**
	 * @access public
	 * @var CampaignSearchRowBasic
	 */
	public $leadSourceJoin;
	/**
	 * @access public
	 * @var MessageSearchRowBasic
	 */
	public $messagesJoin;
	/**
	 * @access public
	 * @var TransactionSearchRowBasic
	 */
	public $orderJoin;
	/**
	 * @access public
	 * @var OriginatingLeadSearchRowBasic
	 */
	public $originatingLeadJoin;
	/**
	 * @access public
	 * @var PartnerSearchRowBasic
	 */
	public $partnerJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $salesRepJoin;
	/**
	 * @access public
	 * @var TaskSearchRowBasic
	 */
	public $taskJoin;
	/**
	 * @access public
	 * @var NoteSearchRowBasic
	 */
	public $userNotesJoin;
	/**
	 * @access public
	 * @var CustomSearchRowBasic[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "OpportunitySearchRowBasic",
		"actualJoin" => "TransactionSearchRowBasic",
		"callJoin" => "PhoneCallSearchRowBasic",
		"customerJoin" => "CustomerSearchRowBasic",
		"decisionMakerJoin" => "ContactSearchRowBasic",
		"estimateJoin" => "TransactionSearchRowBasic",
		"eventJoin" => "CalendarEventSearchRowBasic",
		"fileJoin" => "FileSearchRowBasic",
		"itemJoin" => "ItemSearchRowBasic",
		"leadSourceJoin" => "CampaignSearchRowBasic",
		"messagesJoin" => "MessageSearchRowBasic",
		"orderJoin" => "TransactionSearchRowBasic",
		"originatingLeadJoin" => "OriginatingLeadSearchRowBasic",
		"partnerJoin" => "PartnerSearchRowBasic",
		"salesRepJoin" => "EmployeeSearchRowBasic",
		"taskJoin" => "TaskSearchRowBasic",
		"userNotesJoin" => "NoteSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
    public static function create()
    {
        return new static();
    }
}
