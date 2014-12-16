<?php

class JobMilestones {
	/**
	 * @access public
	 * @var string
	 */
	public $milestoneName;
	/**
	 * @access public
	 * @var string
	 */
	public $milestoneOrder;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $milestoneEstComplete;
	/**
	 * @access public
	 * @var boolean
	 */
	public $milestoneCompleted;
	/**
	 * @access public
	 * @var string
	 */
	public $milestoneComments;

	static $paramtypesmap = array(
		"milestoneName" => "string",
		"milestoneOrder" => "string",
		"milestoneEstComplete" => "dateTime",
		"milestoneCompleted" => "boolean",
		"milestoneComments" => "string",
	);
    public static function create()
    {
        return new static();
    }
}
