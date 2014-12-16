<?php

class SolutionSearch extends SearchRecord {
	/**
	 * @access public
	 * @var SolutionSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var SupportCaseSearchBasic
	 */
	public $caseJoin;
	/**
	 * @access public
	 * @var SolutionSearchBasic
	 */
	public $relatedSolutionJoin;
	/**
	 * @access public
	 * @var TopicSearchBasic
	 */
	public $topicJoin;
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
		"basic" => "SolutionSearchBasic",
		"caseJoin" => "SupportCaseSearchBasic",
		"relatedSolutionJoin" => "SolutionSearchBasic",
		"topicJoin" => "TopicSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"userNotesJoin" => "NoteSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
    public static function create()
    {
        return new static();
    }
}
