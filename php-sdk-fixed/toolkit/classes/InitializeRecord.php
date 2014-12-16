<?php

class InitializeRecord {
	/**
	 * @access public
	 * @var InitializeType
	 */
	public $type;
	/**
	 * @access public
	 * @var InitializeRef
	 */
	public $reference;
	/**
	 * @access public
	 * @var InitializeAuxRef
	 */
	public $auxReference;
	/**
	 * @access public
	 * @var InitializeRefList
	 */
	public $referenceList;

	static $paramtypesmap = array(
		"type" => "InitializeType",
		"reference" => "InitializeRef",
		"auxReference" => "InitializeAuxRef",
		"referenceList" => "InitializeRefList",
	);
    public static function create()
    {
        return new static();
    }
}
