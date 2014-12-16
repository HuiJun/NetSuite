<?php

class ProjectTaskSearch extends SearchRecord {
	/**
	 * @access public
	 * @var ProjectTaskSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var JobSearchBasic
	 */
	public $jobJoin;
	/**
	 * @access public
	 * @var ProjectTaskSearchBasic
	 */
	public $predecessorJoin;
	/**
	 * @access public
	 * @var ProjectTaskAssignmentSearchBasic
	 */
	public $projectTaskAssignmentJoin;
	/**
	 * @access public
	 * @var ProjectTaskSearchBasic
	 */
	public $successorJoin;
	/**
	 * @access public
	 * @var TimeBillSearchBasic
	 */
	public $timeJoin;
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
		"basic" => "ProjectTaskSearchBasic",
		"jobJoin" => "JobSearchBasic",
		"predecessorJoin" => "ProjectTaskSearchBasic",
		"projectTaskAssignmentJoin" => "ProjectTaskAssignmentSearchBasic",
		"successorJoin" => "ProjectTaskSearchBasic",
		"timeJoin" => "TimeBillSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"userNotesJoin" => "NoteSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
    public static function create()
    {
        return new static();
    }
}
