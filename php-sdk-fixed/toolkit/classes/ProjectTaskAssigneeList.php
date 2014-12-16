<?php

class ProjectTaskAssigneeList {
	/**
	 * @access public
	 * @var ProjectTaskAssignee[]
	 */
	public $projectTaskAssignee;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"projectTaskAssignee" => "ProjectTaskAssignee[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
