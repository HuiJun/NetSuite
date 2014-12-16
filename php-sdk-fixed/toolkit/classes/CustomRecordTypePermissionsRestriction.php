<?php

class CustomRecordTypePermissionsRestriction {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _editingOnly = "_editingOnly";
	/**
	 * @var string
	 */
	const _viewingAndEditing = "_viewingAndEditing";
    public static function create()
    {
        return new static();
    }
}
