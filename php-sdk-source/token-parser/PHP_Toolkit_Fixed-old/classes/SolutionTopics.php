<?php

class SolutionTopics {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $topic;

	static $paramtypesmap = array(
		"topic" => "RecordRef",
	);
    public static function create()
    {
        return new static();
    }
}
