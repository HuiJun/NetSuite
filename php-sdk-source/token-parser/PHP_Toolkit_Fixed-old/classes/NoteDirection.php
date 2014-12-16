<?php

class NoteDirection {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _incoming = "_incoming";
	/**
	 * @var string
	 */
	const _outgoing = "_outgoing";
    public static function create()
    {
        return new static();
    }
}
