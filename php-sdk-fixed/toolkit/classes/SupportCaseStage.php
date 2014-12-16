<?php

class SupportCaseStage {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _closed = "_closed";
	/**
	 * @var string
	 */
	const _escalated = "_escalated";
	/**
	 * @var string
	 */
	const _open = "_open";
    public static function create()
    {
        return new static();
    }
}
