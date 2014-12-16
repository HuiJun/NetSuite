<?php

class WorkOrderCompletionComponentList {
	/**
	 * @access public
	 * @var WorkOrderCompletionComponent[]
	 */
	public $workOrderCompletionComponent;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"workOrderCompletionComponent" => "WorkOrderCompletionComponent[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
