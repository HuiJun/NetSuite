<?php

class ResourceAllocationApprovalStatus {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _approved = "_approved";
	/**
	 * @var string
	 */
	const _pendingApproval = "_pendingApproval";
	/**
	 * @var string
	 */
	const _rejected = "_rejected";
    public static function create()
    {
        return new static();
    }
}
