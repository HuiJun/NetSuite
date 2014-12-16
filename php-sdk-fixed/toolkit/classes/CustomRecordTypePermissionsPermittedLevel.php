<?php

class CustomRecordTypePermissionsPermittedLevel {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _create = "_create";
	/**
	 * @var string
	 */
	const _edit = "_edit";
	/**
	 * @var string
	 */
	const _full = "_full";
	/**
	 * @var string
	 */
	const _none = "_none";
	/**
	 * @var string
	 */
	const _view = "_view";
    public static function create()
    {
        return new static();
    }
}
