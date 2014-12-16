<?php

class CustomerNumberFormat {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _spaceAsDigitGroupSeparatorAndDecimalComma = "_spaceAsDigitGroupSeparatorAndDecimalComma";
	/**
	 * @var string
	 */
	const _spaceAsDigitGroupSeparatorAndDecimalPoint = "_spaceAsDigitGroupSeparatorAndDecimalPoint";
	/**
	 * @var string
	 */
	const _commaAsDigitGroupSeparatorAndDecimalPoint = "_commaAsDigitGroupSeparatorAndDecimalPoint";
	/**
	 * @var string
	 */
	const _pointAsDigitGroupSeparatorAndDecimalComma = "_pointAsDigitGroupSeparatorAndDecimalComma";
	/**
	 * @var string
	 */
	const _apostropheAsDigitGroupSeparatorAndDecimalComma = "_apostropheAsDigitGroupSeparatorAndDecimalComma";
	/**
	 * @var string
	 */
	const _apostropheAsDigitGroupSeparatorAndDecimalPoint = "_apostropheAsDigitGroupSeparatorAndDecimalPoint";
    public static function create()
    {
        return new static();
    }
}
