<?php

class WorkOrderCompletionOperationList {
	/**
	 * @access public
	 * @var WorkOrderCompletionOperation[]
	 */
	public $workOrderCompletionOperation;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"workOrderCompletionOperation" => "WorkOrderCompletionOperation[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
