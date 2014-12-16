<?php

class JobMilestonesList {
	/**
	 * @access public
	 * @var JobMilestones[]
	 */
	public $milestones;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"milestones" => "JobMilestones[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
