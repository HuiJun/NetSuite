<?php

class ProjectTaskSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var ProjectTaskSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var JobSearchRowBasic
	 */
	public $jobJoin;
	/**
	 * @access public
	 * @var ProjectTaskSearchRowBasic
	 */
	public $predecessorJoin;
	/**
	 * @access public
	 * @var ProjectTaskAssignmentSearchRowBasic
	 */
	public $projectTaskAssignmentJoin;
	/**
	 * @access public
	 * @var ProjectTaskSearchRowBasic
	 */
	public $successorJoin;
	/**
	 * @access public
	 * @var TimeBillSearchRowBasic
	 */
	public $timeJoin;
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
		"basic" => "ProjectTaskSearchRowBasic",
		"jobJoin" => "JobSearchRowBasic",
		"predecessorJoin" => "ProjectTaskSearchRowBasic",
		"projectTaskAssignmentJoin" => "ProjectTaskAssignmentSearchRowBasic",
		"successorJoin" => "ProjectTaskSearchRowBasic",
		"timeJoin" => "TimeBillSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"userNotesJoin" => "NoteSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
    public static function create()
    {
        return new static();
    }
}
