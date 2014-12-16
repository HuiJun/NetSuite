<?php

class WorkOrderIssueComponentList {
	/**
	 * @access public
	 * @var WorkOrderIssueComponent[]
	 */
	public $workOrderIssueComponent;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"workOrderIssueComponent" => "WorkOrderIssueComponent[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
