<?php

class IssueRelatedIssuesList {
	/**
	 * @access public
	 * @var IssueRelatedIssues[]
	 */
	public $issueRelatedIssues;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"issueRelatedIssues" => "IssueRelatedIssues[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
