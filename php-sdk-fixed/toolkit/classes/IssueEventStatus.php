<?php

class IssueEventStatus {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _closed = "_closed";
	/**
	 * @var string
	 */
	const _onHold = "_onHold";
	/**
	 * @var string
	 */
	const _open = "_open";
	/**
	 * @var string
	 */
	const _resolved = "_resolved";
    public static function create()
    {
        return new static();
    }
}
