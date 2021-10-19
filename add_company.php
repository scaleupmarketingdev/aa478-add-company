<?php
//Test Connection

require_once("isdk.php");	
$app = new iSDK;

if( $app->cfgCon("aa478")){ 

$company = $_REQUEST['company'];
$contact_id = $_REQUEST['contactId'];

//Condition Fetch
$returnFields = array('Company','CompanyID');
$contacts = $app->dsFind('Company',2,0,'Company',$company,$returnFields);

foreach($contacts as $contact){
	echo $CompanyID = $contact['CompanyID'];
}   
 
//If company dont exist
if($CompanyID == ''){ 
	$data = array('Company' => $company);
	$app->dsAdd("Company", $data);
	//Create company
	$returnFields = array('CompanyID','Company');
	$contacts = $app->dsFind('Company',1,0,'Company',$company,$returnFields);

	foreach($contacts as $contact){
		$companyId = $contact['CompanyID'];
		$companyname = $contact['Company'];
	};
	
	$conDat = array('Company' => $companyname,
					'CompanyID' => $companyId);
	$conID = $app->updateCon($contact_id, $conDat);
	//
}
 
elseif($CompanyID != ''){
	$returnFields = array('CompanyID','Company');
	$contacts = $app->dsFind('Company',1,0,'Company',$company,$returnFields);

	foreach($contacts as $contact){
		$companyId = $contact['CompanyID'];
		$companyname = $contact['Company'];
	};
	
	$conDat = array('Company' => $companyname,
					'CompanyID' => $companyId);
	$conID = $app->updateCon($contact_id, $conDat);
}

 
} 
?> 

	
