<?php

class ManufacturingRoutingRoutingStepList {
	/**
	 * @access public
	 * @var ManufacturingRoutingRoutingStep[]
	 */
	public $manufacturingRoutingRoutingStep;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"manufacturingRoutingRoutingStep" => "ManufacturingRoutingRoutingStep[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
