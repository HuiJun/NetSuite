<?php

class ItemMatrixType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _parent = "_parent";
	/**
	 * @var string
	 */
	const _child = "_child";
    public static function create()
    {
        return new static();
    }
}
