<?php

class AsyncStatusResult {
	/**
	 * @access public
	 * @var string
	 */
	public $jobId;
	/**
	 * @access public
	 * @var AsyncStatusType
	 */
	public $status;
	/**
	 * @access public
	 * @var float
	 */
	public $percentCompleted;
	/**
	 * @access public
	 * @var float
	 */
	public $estRemainingDuration;

	static $paramtypesmap = array(
		"jobId" => "string",
		"status" => "AsyncStatusType",
		"percentCompleted" => "float",
		"estRemainingDuration" => "float",
	);
    public static function create()
    {
        return new static();
    }
}
