<?php

class SolutionSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var SolutionSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var SupportCaseSearchRowBasic
	 */
	public $caseJoin;
	/**
	 * @access public
	 * @var SolutionSearchRowBasic
	 */
	public $relatedSolutionJoin;
	/**
	 * @access public
	 * @var TopicSearchRowBasic
	 */
	public $topicJoin;
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
		"basic" => "SolutionSearchRowBasic",
		"caseJoin" => "SupportCaseSearchRowBasic",
		"relatedSolutionJoin" => "SolutionSearchRowBasic",
		"topicJoin" => "TopicSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"userNotesJoin" => "NoteSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
    public static function create()
    {
        return new static();
    }
}
