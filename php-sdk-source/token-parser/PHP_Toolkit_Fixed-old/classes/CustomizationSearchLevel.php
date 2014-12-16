<?php

class CustomizationSearchLevel {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _none = "_none";
	/**
	 * @var string
	 */
	const _edit = "_edit";
	/**
	 * @var string
	 */
	const _run = "_run";
    public static function create()
    {
        return new static();
    }
}
