<?php

class BillingScheduleMilestone {
	/**
	 * @access public
	 * @var integer
	 */
	public $milestoneId;
	/**
	 * @access public
	 * @var float
	 */
	public $milestoneAmount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $milestoneTerms;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $projectTask;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $milestoneDate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $milestoneCompleted;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $milestoneActualCompletionDate;
	/**
	 * @access public
	 * @var string
	 */
	public $comments;

	static $paramtypesmap = array(
		"milestoneId" => "integer",
		"milestoneAmount" => "float",
		"milestoneTerms" => "RecordRef",
		"projectTask" => "RecordRef",
		"milestoneDate" => "dateTime",
		"milestoneCompleted" => "boolean",
		"milestoneActualCompletionDate" => "dateTime",
		"comments" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
