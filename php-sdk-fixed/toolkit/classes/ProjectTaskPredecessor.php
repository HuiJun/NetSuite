<?php

class ProjectTaskPredecessor {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $task;
	/**
	 * @access public
	 * @var ProjectTaskPredecessorPredecessorType
	 */
	public $type;
	/**
	 * @access public
	 * @var float
	 */
	public $lagDays;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $startDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $endDate;

	static $paramtypesmap = array(
		"task" => "RecordRef",
		"type" => "ProjectTaskPredecessorPredecessorType",
		"lagDays" => "float",
		"startDate" => "dateTime",
		"endDate" => "dateTime",
	);
    public static function create()
    {
        return new static();
    }
}
