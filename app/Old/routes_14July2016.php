<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/* Route::get('/', function()
{
	return View::make('hello');
});
*/
Route::post('updateUrl',array('as'=>'updateUrl', 'uses'=>'ContactController@updateMapUrl'));

// auth routes
Route::get('admin/login','AdminController@showLogin');
Route::post('admin/login', array('as' => 'login', 'uses' => 'AdminController@handleLogin'));
Route::get('admin/logout','AdminController@handleLogout');

//Front end routes starts

	Route::get('/','HomeController@showIndex');

	Route::get('/company/profile','HomeController@showProfile');
	Route::get('/company/info','HomeController@showInfo');
	Route::get('/company/vision','HomeController@showVision');
	Route::get('/company/boardofdirectors','HomeController@showBoard');
	Route::get('/company/structure','HomeController@showStructure');

	Route::get('/company/paperbags','HomeController@showPaperBags');
	Route::get('/company/cartonbox','HomeController@showCartoon');
	Route::get('/company/boardcharter','HomeController@showBoardCharter');
	Route::get('/company/auditcommitte','HomeController@showAudit');
	Route::get('/company/nomination','HomeController@showNomination');
	//Route::get('/company/financial','HomeController@showFinance');
	Route::get('/company/announcements','HomeController@showAnnouncement');
	//Route::get('/carrers','HomeController@showCarrer');

	Route::get('/carrers', 'Career1Controller@frontCareer');
	Route::post('company/searchcareers', 'Career1Controller@frontsearchCareer');
	Route::get('company/careers/apply/{vaccancy_id}', 'Career1Controller@showApplyForm');
	Route::post('company/careers/submitapp', 'Career1Controller@submitApp');


	//Route::get('/contactus','HomeController@showContactUs');
	//Route::get('contacts/feedback', 'ContactController@feedbackFront');
	Route::get('/contactus', 'ContactController@contactusFront');
        Route::get('contactus/getsubcategory/{id}', 'ContactController@getSubcategory');
	Route::post('contacts/feedback/submitfeedback', 'ContactController@submitFeedback');
	Route::get('/password/reset', 'RemindersController@getRemind');
	Route::post('password', 'RemindersController@postRemind'); // Password Reminder
	Route::get('/password/reset/{token}', 'RemindersController@getReset');

	Route::post('/password/reset', 'RemindersController@postReset');

	Route::get('company/financial', 'AnnualreportController@frontAnnualreport');
	




Route::group(["before" => "auth"], function ()
{
	// dashboard admin
	Route::get('admin/dashboard','AdminController@dashboard');
	//index admin
	Route::get('admin/index','AdminController@adminindex');
	Route::post('admin/index/addbanner', 'AdminController@addBanner');
	Route::post('admin/index/editbanner', 'AdminController@editBanner');
	Route::post('admin/index/deletebanner', 'AdminController@deleteBanner');
	//vaccencies (Carrer tab)
	Route::get('admin/vaccancies', 'Career1Controller@vaccancyIndex');
	Route::post('admin/vaccancy/addvaccancy', 'Career1Controller@addVaccancy');
	Route::post('admin/vaccancy/editvaccancy', 'Career1Controller@editVaccancy');
	Route::post('admin/vaccancy/deletevaccancy', 'Career1Controller@deleteVaccancy');
        
        // enquiry category set up
        Route::get('admin/enquiry_category', 'EnquirycategoryController@listing');
        Route::post('admin/enquiry_category/addcategory', 'EnquirycategoryController@addEnquirycategory');
        Route::post('admin/enquiry_category/addsubcategory', 'EnquirycategoryController@addEnquirysubcategory');
        Route::post('admin/enquiry_category/editcategory', 'EnquirycategoryController@editEnquirycategory');
        Route::post('admin/enquiry_category/editsubcategory', 'EnquirycategoryController@editEnquirysubcategory');
        Route::post('admin/enquiry_category/deletecategory', 'EnquirycategoryController@deleteEnquirycategory');
        Route::post('admin/enquiry_category/deletesubcategory', 'EnquirycategoryController@deleteEnquirysubcategory');
        
        // enquiry email setup
        Route::get('admin/enquiry_email', 'EnquiryemailController@listing');
        Route::post('admin/enquiry_email/addemail', 'EnquiryemailController@addEnquiryemail');
        Route::get('admin/enquiry_email/getsubcategory/{id}', 'EnquiryemailController@getSubcategory');
        Route::post('admin/enquiry_email/editemail', 'EnquiryemailController@editEnquiryemail');
        Route::post('admin/enquiry_email/deleteemail', 'EnquiryemailController@deleteEnquiryemail');


	//applicants (Carrer tab)
	Route::get('admin/applicants', 'Career1Controller@applicantsListing');
	Route::post('admin/applicants/deleteapplication', 'Career1Controller@deleteApplication');
	//feedbacks under contact tab
	Route::get('admin/contacts/feedbacks', 'ContactController@adminFeedback');
	//paper bags under business tab
	Route::get('admin/business/paperbags', 'BusinessController@adminPaperBags');
	Route::get('admin/business/corrugated', 'BusinessController@adminCorrugated');
	//board charter under invester relation under governnce
	
	Route::get('admin/governance/charter', 'GovernanceController@adminBoardcharter');
	//audit under governance
	Route::get('admin/governance/audit', 'GovernanceController@adminAudit');
	//nomination under governance
	Route::get('admin/governance/nomination', 'GovernanceController@adminNomination');
	// for reports under invester relation
	Route::get('admin/annual/reports', 'AnnualreportController@adminAnnualreport');
	Route::post('admin/annual/addreports', 'AnnualreportController@adminAddReports');
	Route::post('admin/annual/editreports', 'AnnualreportController@adminEditReports');
	Route::post('admin/annual/deletereports', 'AnnualreportController@adminDeleteReports');
	Route::post('admin/annual/deleteallreports', 'AnnualreportController@adminDeleteAllReports');

	Route::post('admin/annual/deletepdf', 'AnnualreportController@adminDeletePdf');
	Route::post('admin/annual/deletecover', 'AnnualreportController@adminDeleteCover');


	//for announcements of company
	Route::get('admin/company/announcements', 'AnnouncementController@adminAnnouncement');
	//Route::get('investorrelations/annualreports', 'AnnualreportController@frontAnnualreport');company/financial
	
	Route::post('admin/page/savepage', 'PageController@savePage');






	














Route::get('admin/userslist','UserController@listUsers',array('before' => 'auth'));
Route::post('admin/deleteallusers','UserController@userDeleteAll');
Route::post('admin/deletesingleuser','UserController@adminDeleteUser');




Route::get('admin/manufacturing/packaging/canpac','ManufacturingController@packagingCanpac');
Route::get('admin/manufacturing/packaging/southeast','ManufacturingController@packagingSoutheast');
Route::get('admin/manufacturing/palmoil/refinery','ManufacturingController@palmoilRefinery');
Route::get('admin/manufacturing/palmoil/mill','ManufacturingController@palmoilMill');
Route::get('admin/trading/yeelee', 'TradingController@tradingAdminYelee');
Route::post('admin/trading/admindeletebanner', 'TradingController@adminDeleteBanner');
Route::post('admin/trading/admindeletebrand', 'TradingController@adminDeleteBrand');
Route::post('admin/trading/admindeleteallbanner', 'TradingController@adminDeleteAllBanner');
Route::post('admin/trading/admindeleteallbrands', 'TradingController@adminDeleteAllBrands');
Route::get('admin/investor/pressrelease', 'PressreleaseController@adminPressrelease');

Route::post('admin/index/addcorebusiness', 'AdminController@addCorebusiness');
Route::post('admin/index/editcorebusiness', 'AdminController@editCorebusiness');
Route::post('admin/index/deletecorebusiness', 'AdminController@deleteCorebusiness');

Route::post('admin/index/deletecorebusinessall', 'AdminController@deleteCorebusinessAll');


Route::post('admin/manufacturing/addslidingbanner', 'ManufacturingController@addSlidingBanner');
Route::post('admin/manufacturing/editslidingbanner', 'ManufacturingController@editSlidingBanner');


Route::post('admin/trading/addslidingbanner', 'TradingController@addSlidingBanner');
Route::post('admin/trading/editslidingbanner', 'TradingController@editSlidingBanner');
Route::post('admin/trading/addbrands', 'TradingController@addBrands');
Route::post('admin/trading/editbrands', 'TradingController@editBrands');

Route::post('admin/manufacturing/addprocesseslisting', 'ManufacturingController@addProcesssListings');
Route::post('admin/manufacturing/editprocesseslisting', 'ManufacturingController@editProcesssListings');
Route::post('admin/manufacturing/deleteprocesseslisting', 'ManufacturingController@deleteProcesslisting');
Route::post('admin/manufacturing/deleteslidingbanner', 'ManufacturingController@deleteSlidingbanner');
Route::post('admin/manufacturing/deleteallbanner', 'ManufacturingController@deleteAllBanner');
Route::post('admin/manufacturing/deleteallprocess', 'ManufacturingController@deleteAllProcess');

Route::post('admin/manufacturing/deleteallsoutheastbanner', 'ManufacturingController@deleteAllSoutheastBanner');
Route::post('admin/manufacturing/deleteallsoutheastprocess', 'ManufacturingController@deleteAllSoutheastProcess');




//Route::post('admin/page/savepage', 'PageController@savePage');
Route::post('admin/page/deletemultipleuserlist', 'PageController@adminDeleteMultipleUserlist');
Route::post('admin/page/deletemultiplefeedback', 'PageController@adminDeleteMultipleFeedback');
Route::post('admin/page/deletemultiplebrandlisting', 'PageController@adminDeleteMultipleBrandlisting');
Route::post('admin/page/deletemultipleannual', 'PageController@adminDeleteMultipleAnnual');
Route::post('admin/page/deletemultipleboard', 'PageController@adminDeleteMultipleBoard');
Route::post('admin/page/deletemultiplepressrelease', 'PageController@adminDeleteMultiplePressrelease');
Route::post('admin/page/deletemultipleapplicants', 'PageController@adminDeleteMultipleApplicants');
Route::post('admin/page/deletemultiplevaccancies', 'PageController@adminDeleteMultipleVaccancies');
Route::post('admin/page/deletemultiplecorebusinesses', 'PageController@adminDeleteMultipleIndexCorebusinesses');
Route::post('admin/page/deletemultipleindexbanner', 'PageController@adminDeleteMultipleIndexBanner');
Route::post('admin/page/deletemultiplebanner', 'PageController@adminDeleteMultipleBanner');
Route::post('admin/page/deletemultipleprocesses', 'PageController@adminDeleteMultipleProcesses');
Route::post('admin/investor/addpressrelease', 'PressreleaseController@addPressrelease');
Route::post('admin/investor/deletepressrelease', 'PressreleaseController@deletePressrelease');
Route::post('admin/investor/deleteallpressrelease', 'PressreleaseController@deleteAllPressrelease');
Route::post('admin/investor/editpressrelease', 'PressreleaseController@editPressrelease');
Route::post('admin/investor/editpage', 'PressreleaseController@editPage');
Route::post('admin/page/deletemultipleenquirycategory', 'PageController@adminDeleteMultipleEnquirycategory');
Route::post('admin/page/deletemultipleenquirysubcategory', 'PageController@adminDeleteMultipleEnquirysubcategory');
Route::post('admin/page/deletemultipleenquiryemail', 'PageController@adminDeleteMultipleEnquiryemail');

Route::get('admin/contacts/contactus', 'ContactController@adminContactus');
Route::post('admin/contacts/deletefeedback', 'ContactController@adminDeleteFeedback');
Route::post('admin/contacts/deleteallfeedback', 'ContactController@adminDeleteAllFeedback');
Route::get('admin/plantation/sementra', 'PlantationController@adminSementra');
Route::post('admin/plantation/addsementra', 'PlantationController@adminAddSementra');
Route::post('admin/plantation/editsementra', 'PlantationController@adminEditSementra');
Route::post('admin/plantation/deletesementra', 'PlantationController@adminDeleteSementra');
Route::post('admin/plantation/deleteallsementra', 'PlantationController@adminDeleteAllSementra');
Route::post('admin/plantation/addprocesses', 'PlantationController@adminAddProcesses');
Route::post('admin/plantation/editprocesses', 'PlantationController@adminEditProcesses');
Route::post('admin/plantation/deleteprocesses', 'PlantationController@adminDeleteProcesses');
Route::post('admin/plantation/deleteallprocesses', 'PlantationController@adminDeleteAllProcesses');
Route::get('admin/teaplantation/teaplantation', 'TeaplantationController@adminTeaplantation');
Route::post('admin/teaplantation/addbanner', 'TeaplantationController@adminAddBanner');
Route::post('admin/teaplantation/editbanner', 'TeaplantationController@adminEditBanner');
Route::post('admin/teaplantation/deletebanner', 'TeaplantationController@adminDeleteBanner');
Route::post('admin/teaplantation/deleteallbanner', 'TeaplantationController@adminDeleteAllBanner');
Route::post('admin/teaplantation/addprocesses', 'TeaplantationController@adminAddProcesses');
Route::post('admin/teaplantation/editprocesses', 'TeaplantationController@adminEditProcesses');
Route::post('admin/teaplantation/deleteprocesses', 'TeaplantationController@adminDeleteProcesses');
Route::post('admin/teaplantation/deleteallprocesses', 'TeaplantationController@adminDeleteAllProcesses');

Route::get('admin/hospitality/hospitality', 'HospitalityController@adminHospitality');
Route::post('admin/hospitality/addbanner', 'HospitalityController@adminAddBanner');
Route::post('admin/hospitality/editbanner', 'HospitalityController@adminEditBanner');
Route::post('admin/hospitality/deletebanner', 'HospitalityController@adminDeleteBanner');
Route::post('admin/hospitality/deleteallbanner', 'HospitalityController@adminDeleteAllBanner');
Route::post('admin/hospitality/addprocesses', 'HospitalityController@adminAddProcesses');
Route::post('admin/hospitality/editprocesses', 'HospitalityController@adminEditProcesses');
Route::post('admin/hospitality/deleteprocesses', 'HospitalityController@adminDeleteProcesses');
Route::post('admin/hospitality/deleteallprocesses', 'HospitalityController@adminDeleteAllProcesses');



Route::get('admin/board/charter', 'BoardcharterController@adminBoardcharter');
Route::post('admin/board/addcharters', 'BoardcharterController@adminAddCharters');
Route::post('admin/board/editcharters', 'BoardcharterController@adminEditCharters');
Route::post('admin/board/deletecharters', 'BoardcharterController@adminDeleteCharters');
Route::post('admin/board/deleteallcharters', 'BoardcharterController@adminDeleteAllCharters');




Route::post('admin/updateorder', 'AdminController@updateOrder');
Route::post('admin/deletepdf', 'AdminController@deletePdf');

});



Route::get('/forgotpassword', 'AdminController@forgotPassword');
Route::post('user/store', 'UserController@store');
Route::post('user/update', 'UserController@update');
Route::post('admin/users/saveuser', 'UserController@saveUser');
Route::post('admin/users/updateuser', 'UserController@updateUser');
Route::post('admin/users/changepassword', 'UserController@changepassword');







/* Front Routers */
Route::get('manufacturing/packaging/canpac','ManufacturingController@packagingFrontCanpac');
Route::get('manufacturing/packaging/southeast','ManufacturingController@packagingFrontSoutheast');
Route::get('manufacturing/palmoil/refinery','ManufacturingController@palmoilFrontRefinery');
Route::get('manufacturing/palmoil/mill','ManufacturingController@palmoilFrontMill');


Route::get('trading/tradingdivision/yelee', 'TradingController@tradingFrontYelee');



/* End of Front Routers */



Route::get('investorrelations/pressrelease', 'PressreleaseController@frontPressrelease');
Route::get('investorrelations/pressreleasesort/{dateSort}', 'PressreleaseController@frontPressrelease');
Route::get('investorrelations/board_charter', 'BoardcharterController@frontBoardcharter');

Route::get('investorrelations/announcements', 'AnnouncementController@frontAnnouncement');
Route::get('plantation/oilpalmestate', 'PlantationController@oilplantationFront');
Route::get('plantation/teaplantation', 'TeaplantationController@teaplantationFront');
Route::get('hospitality/hospitalitydivision', 'HospitalityController@hospitalityFront');


/* Company Controllers */
Route::get('company/companyhistory', 'CompanyController@frontCompanyhistory');
Route::get('company/corporateinformation', 'CompanyController@frontcorporateinfo');
Route::get('company/corporatestructure', 'CompanyController@frontcorporatestructure');
Route::get('company/corporatephilosophy', 'CompanyController@frontcorporatephilo');
Route::get('company/corporatevision', 'CompanyController@frontcorporatevision');
Route::get('company/corporatesocialresponsibility', 'CompanyController@frontcorporatesocialresp');
