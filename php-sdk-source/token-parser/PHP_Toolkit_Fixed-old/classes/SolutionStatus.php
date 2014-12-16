<?php

class SolutionStatus {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _approved = "_approved";
	/**
	 * @var string
	 */
	const _unapproved = "_unapproved";
    public static function create()
    {
        return new static();
    }
}
