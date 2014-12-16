<?php

class EntityGroupDefView {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _daily = "_daily";
	/**
	 * @var string
	 */
	const _weekly = "_weekly";
	/**
	 * @var string
	 */
	const _monthly = "_monthly";
    public static function create()
    {
        return new static();
    }
}
