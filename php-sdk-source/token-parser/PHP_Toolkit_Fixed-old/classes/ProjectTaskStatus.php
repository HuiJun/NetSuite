<?php

class ProjectTaskStatus {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _completed = "_completed";
	/**
	 * @var string
	 */
	const _inProgress = "_inProgress";
	/**
	 * @var string
	 */
	const _notStarted = "_notStarted";
    public static function create()
    {
        return new static();
    }
}
