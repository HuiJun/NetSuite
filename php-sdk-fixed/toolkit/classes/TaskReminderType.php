<?php

class TaskReminderType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _eMail = "_eMail";
	/**
	 * @var string
	 */
	const _popupWindow = "_popupWindow";
    public static function create()
    {
        return new static();
    }
}
