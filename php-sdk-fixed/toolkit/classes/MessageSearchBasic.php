<?php

class MessageSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $author;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $authorEmail;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $bcc;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $cc;
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
	 * @var SearchBooleanField
	 */
	public $hasAttachment;
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
	public $internalOnly;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $message;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $messageDate;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $messageType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $recipient;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $recipientEmail;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $subject;

	static $paramtypesmap = array(
		"author" => "SearchMultiSelectField",
		"authorEmail" => "SearchStringField",
		"bcc" => "SearchStringField",
		"cc" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"hasAttachment" => "SearchBooleanField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"internalOnly" => "SearchBooleanField",
		"message" => "SearchStringField",
		"messageDate" => "SearchDateField",
		"messageType" => "SearchEnumMultiSelectField",
		"recipient" => "SearchMultiSelectField",
		"recipientEmail" => "SearchStringField",
		"subject" => "SearchStringField",
	);
    public static function create()
    {
        return new static();
    }
}
