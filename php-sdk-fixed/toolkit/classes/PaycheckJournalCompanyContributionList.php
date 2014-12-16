<?php

class PaycheckJournalCompanyContributionList {
	/**
	 * @access public
	 * @var PaycheckJournalCompanyContribution[]
	 */
	public $paycheckJournalCompanyContribution;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"paycheckJournalCompanyContribution" => "PaycheckJournalCompanyContribution[]",
		"replaceAll" => "boolean",
	);
    public static function create()
    {
        return new static();
    }
}
