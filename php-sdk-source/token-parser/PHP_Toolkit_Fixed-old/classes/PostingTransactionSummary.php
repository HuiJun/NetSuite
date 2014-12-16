<?php

class PostingTransactionSummary {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $period;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $account;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $parentItem;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $entity;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $department;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $class;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $location;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $book;
	/**
	 * @access public
	 * @var float
	 */
	public $amount;

	static $paramtypesmap = array(
		"period" => "RecordRef",
		"account" => "RecordRef",
		"parentItem" => "RecordRef",
		"item" => "RecordRef",
		"entity" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"subsidiary" => "RecordRef",
		"book" => "RecordRef",
		"amount" => "float",
	);
    public static function create()
    {
        return new static();
    }
}
