<?php

class CustomizationDynamicDefault {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _currentDateTime = "_currentDateTime";
	/**
	 * @var string
	 */
	const _currentUser = "_currentUser";
	/**
	 * @var string
	 */
	const _currentUsersDepartment = "_currentUsersDepartment";
	/**
	 * @var string
	 */
	const _currentUsersLocation = "_currentUsersLocation";
	/**
	 * @var string
	 */
	const _currentUsersSupervisor = "_currentUsersSupervisor";
	/**
	 * @var string
	 */
	const _currentUsersSubsidiary = "_currentUsersSubsidiary";
    public static function create()
    {
        return new static();
    }
}
