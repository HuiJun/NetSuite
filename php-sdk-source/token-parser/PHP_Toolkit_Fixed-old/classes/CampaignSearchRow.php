<?php

class CampaignSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var CampaignSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var EntitySearchRowBasic
	 */
	public $campaignRecipientJoin;
	/**
	 * @access public
	 * @var FileSearchRowBasic
	 */
	public $fileJoin;
	/**
	 * @access public
	 * @var MessageSearchRowBasic
	 */
	public $messagesJoin;
	/**
	 * @access public
	 * @var OriginatingLeadSearchRowBasic
	 */
	public $originatingLeadJoin;
	/**
	 * @access public
	 * @var PromotionCodeSearchRowBasic
	 */
	public $promotionCodeJoin;
	/**
	 * @access public
	 * @var TransactionSearchRowBasic
	 */
	public $transactionJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $userJoin;
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
		"basic" => "CampaignSearchRowBasic",
		"campaignRecipientJoin" => "EntitySearchRowBasic",
		"fileJoin" => "FileSearchRowBasic",
		"messagesJoin" => "MessageSearchRowBasic",
		"originatingLeadJoin" => "OriginatingLeadSearchRowBasic",
		"promotionCodeJoin" => "PromotionCodeSearchRowBasic",
		"transactionJoin" => "TransactionSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"userNotesJoin" => "NoteSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
    public static function create()
    {
        return new static();
    }
}
