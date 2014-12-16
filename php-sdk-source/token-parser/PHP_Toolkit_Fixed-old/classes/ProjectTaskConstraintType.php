<?php

class ProjectTaskConstraintType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _asSoonAsPossible = "_asSoonAsPossible";
	/**
	 * @var string
	 */
	const _fixedStart = "_fixedStart";
    public static function create()
    {
        return new static();
    }
}
