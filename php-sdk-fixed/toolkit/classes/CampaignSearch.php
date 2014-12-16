<?php

class CampaignSearch extends SearchRecord {
	/**
	 * @access public
	 * @var CampaignSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var EntitySearchBasic
	 */
	public $campaignRecipientJoin;
	/**
	 * @access public
	 * @var FileSearchBasic
	 */
	public $fileJoin;
	/**
	 * @access public
	 * @var MessageSearchBasic
	 */
	public $messagesJoin;
	/**
	 * @access public
	 * @var OriginatingLeadSearchBasic
	 */
	public $originatingLeadJoin;
	/**
	 * @access public
	 * @var PromotionCodeSearchBasic
	 */
	public $promotionCodeJoin;
	/**
	 * @access public
	 * @var TransactionSearchBasic
	 */
	public $transactionJoin;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $userJoin;
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
		"basic" => "CampaignSearchBasic",
		"campaignRecipientJoin" => "EntitySearchBasic",
		"fileJoin" => "FileSearchBasic",
		"messagesJoin" => "MessageSearchBasic",
		"originatingLeadJoin" => "OriginatingLeadSearchBasic",
		"promotionCodeJoin" => "PromotionCodeSearchBasic",
		"transactionJoin" => "TransactionSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"userNotesJoin" => "NoteSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
    public static function create()
    {
        return new static();
    }
}
