<?php

class CustomRecordTypeAccessType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _noPermissionRequired = "_noPermissionRequired";
	/**
	 * @var string
	 */
	const _requireCustomRecordEntriesPermission = "_requireCustomRecordEntriesPermission";
	/**
	 * @var string
	 */
	const _usePermissionList = "_usePermissionList";
    public static function create()
    {
        return new static();
    }
}
