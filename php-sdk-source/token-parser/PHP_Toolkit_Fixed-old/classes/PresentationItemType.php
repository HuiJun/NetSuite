<?php

class PresentationItemType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _fileCabinetItem = "_fileCabinetItem";
	/**
	 * @var string
	 */
	const _informationItem = "_informationItem";
	/**
	 * @var string
	 */
	const _item = "_item";
	/**
	 * @var string
	 */
	const _presentationCategory = "_presentationCategory";
    public static function create()
    {
        return new static();
    }
}
