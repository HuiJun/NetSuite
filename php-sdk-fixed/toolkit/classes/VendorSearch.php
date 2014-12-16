<?php

class VendorSearch extends SearchRecord {
	/**
	 * @access public
	 * @var VendorSearchBasic
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
		"basic" => "VendorSearchBasic",
		"campaignResponseJoin" => "CampaignSearchBasic",
		"contactJoin" => "ContactSearchBasic",
		"contactPrimaryJoin" => "ContactSearchBasic",
		"fileJoin" => "FileSearchBasic",
		"messagesJoin" => "MessageSearchBasic",
		"messagesFromJoin" => "MessageSearchBasic",
		"messagesToJoin" => "MessageSearchBasic",
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
