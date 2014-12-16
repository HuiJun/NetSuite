<?php

class WorkOrderCompletionOperation {
	/**
	 * @access public
	 * @var integer
	 */
	public $operationSequence;
	/**
	 * @access public
	 * @var string
	 */
	public $operationName;
	/**
	 * @access public
	 * @var string
	 */
	public $workCenter;
	/**
	 * @access public
	 * @var integer
	 */
	public $machineResources;
	/**
	 * @access public
	 * @var integer
	 */
	public $laborResources;
	/**
	 * @access public
	 * @var float
	 */
	public $inputQuantity;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityRemaining;
	/**
	 * @access public
	 * @var float
	 */
	public $predecessorCompletedQuantity;
	/**
	 * @access public
	 * @var float
	 */
	public $completedQuantity;
	/**
	 * @access public
	 * @var boolean
	 */
	public $recordSetup;
	/**
	 * @access public
	 * @var float
	 */
	public $machineSetupTime;
	/**
	 * @access public
	 * @var float
	 */
	public $laborSetupTime;
	/**
	 * @access public
	 * @var float
	 */
	public $machineRunTime;
	/**
	 * @access public
	 * @var float
	 */
	public $laborRunTime;

	static $paramtypesmap = array(
		"operationSequence" => "integer",
		"operationName" => "string",
		"workCenter" => "string",
		"machineResources" => "integer",
		"laborResources" => "integer",
		"inputQuantity" => "float",
		"quantityRemaining" => "float",
		"predecessorCompletedQuantity" => "float",
		"completedQuantity" => "float",
		"recordSetup" => "boolean",
		"machineSetupTime" => "float",
		"laborSetupTime" => "float",
		"machineRunTime" => "float",
		"laborRunTime" => "float",
	);
    public static function create()
    {
        return new static();
    }
}
