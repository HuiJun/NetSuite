<?php

class TopicSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var TopicSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var SolutionSearchRowBasic
	 */
	public $solutionJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $userJoin;

	static $paramtypesmap = array(
		"basic" => "TopicSearchRowBasic",
		"solutionJoin" => "SolutionSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
    public static function create()
    {
        return new static();
    }
}
