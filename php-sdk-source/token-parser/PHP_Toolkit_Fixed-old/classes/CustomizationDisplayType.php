<?php

class CustomizationDisplayType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _disabled = "_disabled";
	/**
	 * @var string
	 */
	const _hidden = "_hidden";
	/**
	 * @var string
	 */
	const _inlineText = "_inlineText";
	/**
	 * @var string
	 */
	const _normal = "_normal";
	/**
	 * @var string
	 */
	const _showAsList = "_showAsList";
    public static function create()
    {
        return new static();
    }
}
