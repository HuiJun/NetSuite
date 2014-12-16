<?php

class VsoeSopGroup {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _exclude = "_exclude";
	/**
	 * @var string
	 */
	const _normal = "_normal";
	/**
	 * @var string
	 */
	const _software = "_software";
    public static function create()
    {
        return new static();
    }
}
