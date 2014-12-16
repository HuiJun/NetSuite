<?php

class TopicSearch extends SearchRecord {
	/**
	 * @access public
	 * @var TopicSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var SolutionSearchBasic
	 */
	public $solutionJoin;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $userJoin;

	static $paramtypesmap = array(
		"basic" => "TopicSearchBasic",
		"solutionJoin" => "SolutionSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
    public static function create()
    {
        return new static();
    }
}
