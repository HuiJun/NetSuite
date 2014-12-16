<?php

class PartnerSearch extends SearchRecord {
	/**
	 * @access public
	 * @var PartnerSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var CampaignSearchBasic
	 */
	public $campaignResponseJoin;
	/**
	 * @access public
	 * @var ContactSearchBasic
	 */
	public $contactJoin;
	/**
	 * @access public
	 * @var ContactSearchBasic
	 */
	public $contactPrimaryJoin;
	/**
	 * @access public
	 * @var CustomerSearchBasic
	 */
	public $customerJoin;
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
	 * @var MessageSearchBasic
	 */
	public $messagesFromJoin;
	/**
	 * @access public
	 * @var MessageSearchBasic
	 */
	public $messagesToJoin;
	/**
	 * @access public
	 * @var OpportunitySearchBasic
	 */
	public $opportunityJoin;
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
		"basic" => "PartnerSearchBasic",
		"campaignResponseJoin" => "CampaignSearchBasic",
		"contactJoin" => "ContactSearchBasic",
		"contactPrimaryJoin" => "ContactSearchBasic",
		"customerJoin" => "CustomerSearchBasic",
		"fileJoin" => "FileSearchBasic",
		"messagesJoin" => "MessageSearchBasic",
		"messagesFromJoin" => "MessageSearchBasic",
		"messagesToJoin" => "MessageSearchBasic",
		"opportunityJoin" => "OpportunitySearchBasic",
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
