<?php

//require_once __DIR__ . '/../toolkit/NetSuiteService.php';
require_once __DIR__ . '/../toolkit/NetSuiteService.classes.php';
//require_once __DIR__ . '/../toolkit/namespace.php';

$service = new NetSuiteService();
$service->setSearchPreferences(true, 5, false);

$customerSearch = new CustomerSearchBasic;

$customerSearch->lastModifiedDate = array(
    'operator'    => 'after',
    'searchValue' => '2011-11-23T00:00:000-08:00',
);

$request = new SearchRequest;
$request->searchRecord = $customerSearch;
$response = $service->search($request);

print_r($response->searchResult->recordList->record);
