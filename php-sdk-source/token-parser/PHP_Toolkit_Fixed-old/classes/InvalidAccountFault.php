<?php

class InvalidAccountFault extends NSSoapFault {

	static $paramtypesmap = array(
	);
    public static function create()
    {
        return new static();
    }
}
