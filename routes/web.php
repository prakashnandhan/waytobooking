<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*-------------------------admin-------------------------------------*/
/*adminlogin*/
Route::get('/admin','LoginController@index');
Route::post('login','LoginController@checklogin')->name('login');




Route::get('signout','LoginController@index')->name('signout');

/*password Reset*/

Route::get('forgotpassword','LoginController@forgotpassword')->name('forgotpassword');
Route::post('passwordreset','LoginController@passwordreset')->name('passwordreset');


/*dashboard*/
Route::get('admindashboard','HallController@index');

/*delete*/
Route::get('delete/{id}','MarriageController@delete')->name('delete');
Route::get('destroy/{id}','EventController@destroy')->name('destroy');
Route::get('partydel/{id}','PartyController@destroy')->name('partydel');
Route::get('resdel/{id}','ResortController@destroy')->name('resdel');

/*add types*/
Route::get('marriage','HallController@marriage');
Route::get('party','HallController@party');
Route::get('event','HallController@event');
Route::get('resort','HallController@resort');

/*report of types*/
Route::get('marriage','HallController@getmarriagereport');
Route::get('party','HallController@getpartyreport');
Route::get('event','HallController@geteventreport');
Route::get('resort','HallController@getresortreport');

/*inserting into database*/
Route::post('savemarriagedetails','MarriageController@index')->name('savemarriagedetails');
Route::post('savepartydetails','PartyController@index')->name('savepartydetails');
Route::post('saveeventdetails','EventController@index')->name('saveeventdetails');
Route::post('saveresortdetails','ResortController@index')->name('saveresortdetails');

/*adding*/
Route::get('addpackage','PackageController@addpackage')->name('addpackage');

/*packagereport*/
Route::get('Catering','PackageController@Catering')->name('Catering');
Route::get('flowerdecoration','PackageController@flowerdecoration')->name('flowerdecoration');
Route::get('weddingbands','PackageController@weddingbands')->name('weddingbands');
Route::get('mehendi','PackageController@mehendi')->name('mehendi');
Route::get('makeup','PackageController@makeup')->name('makeup');
Route::get('bangle','PackageController@bangle')->name('bangle');
Route::get('ornaments','PackageController@ornaments')->name('ornaments');
Route::get('Sangeet','PackageController@Sangeet')->name('Sangeet');
Route::get('purohit','PackageController@purohit')->name('purohit');
Route::get('dance','PackageController@dance')->name('dance');
Route::get('Photography','PackageController@Photography')->name('Photography');




/*package_user_report*/
Route::get('Catering_userreport','PackageController@Catering_userreport')->name('Catering_userreport');
Route::get('flowerdecoration_userreport','PackageController@flowerdecoration_userreport')->name('flowerdecoration_userreport');
Route::get('weddingbands_userreport','PackageController@weddingbands_userreport')->name('weddingbands_userreport');
Route::get('mehendi_userreport','PackageController@mehendi_userreport')->name('mehendi_userreport');
Route::get('makeup_userreport','PackageController@makeup_userreport')->name('makeup_userreport');
Route::get('bangle_userreport','PackageController@bangle_userreport')->name('bangle_userreport');
Route::get('ornaments_userreport','PackageController@ornaments_userreport')->name('ornaments_userreport');
Route::get('Sangeet_userreport','PackageController@Sangeet_userreport')->name('Sangeet_userreport');
Route::get('purohit_userreport','PackageController@purohit_userreport')->name('purohit_userreport');
Route::get('dance_userreport','PackageController@dance_userreport')->name('dance_userreport');
Route::get('Photography_userreport','PackageController@Photography_userreport')->name('Photography_userreport');

/*hall_user_report*/
Route::get('marriage_userreport','HallController@marriage_userreport');
Route::get('party_userreport','HallController@party_userreport');
Route::get('event_userreport','HallController@event_userreport');
Route::get('resort_userreport','HallController@resort_userreport');


/*packageadding*/
Route::post('savepackage','PackageController@savepackage')->name('savepackage');
/*package delete*/
Route::get('packagedelete/{id}','PackageController@destroy')->name('packagedelete');


/*-------------------------------------subadmin--------------------------------------------------------------*/


/*subadminlogin*/
Route::get('/subadmin','LoginController@subadmin');
Route::get('subadminsignup','LoginController@subadminsignup')->name('subadminsignup');


/*passwordreset*/
Route::get('subforgot','LoginController@Subforgotpassword')->name('subforgot');
Route::post('subpasswordreset','LoginController@subpasswordreset')->name('subpasswordreset');
 


Route::post('singupsave', ['as' => 'singupsave', 'uses' => 'LoginController@singupsave']);

Route::post('subadminlogin', ['as' => 'subadminlogin', 'uses' => 'LoginController@subadminlogin']);

Route::get('subadminsignout','LoginController@subadmin')->name('subadminsignout');

/*dashboard*/
Route::get('subadmindashboard','SubadminController@index')->name('subadmindashboard');

Route::get('activatesub/{id}','SubadminController@activatesub')->name('activatesub');


Route::get('deletesub/{id}','SubadminController@deletesub')->name('deletesub');

Route::get('subadminprofile','SubadminController@subadminprofile')->name('subadminprofile');
Route::post('saveprofile','SubadminController@saveprofile')->name('saveprofile');



Route::get('submarriage','SubadminController@submarriage');
Route::get('subparty','SubadminController@subparty');
Route::get('subevent','SubadminController@subevent');
Route::get('subresort','SubadminController@subresort');




Route::post('savesubmarriagedetails','MarriageController@savesubmarriagedetails')->name('savesubmarriagedetails');
Route::post('subsavepartydetails','PartyController@subsavepartydetails')->name('subsavepartydetails');
Route::post('savesubeventdetails','EventController@savesubeventdetails')->name('savesubeventdetails');
Route::post('savesubresortdetails','ResortController@savesubresortdetails')->name('savesubresortdetails');

Route::get('addsubpackage','PackageController@addsubpackage')->name('addsubpackage');



Route::get('managemarriage','SubadminController@managemarriage')->name('managemarriage');
Route::get('manageparty','SubadminController@manageparty')->name('manageparty');
Route::get('manageevent','SubadminController@manageevent')->name('manageevent');
Route::get('manageresort','SubadminController@manageresort')->name('manageresort');


Route::get('subadmin_report','SubadminController@subadmin_report')->name('subadmin_report');

Route::get('sub_managehall','SubadminController@sub_managehall')->name('sub_managehall');


Route::get('subdel/{id}','SubadminController@subdestroy')->name('subdel');



Route::get('availbility_yes/{id}','SubadminController@availbility_yes')->name('availbility_yes');
Route::get('availbility_no/{id}','SubadminController@availbility_no')->name('availbility_no');




  /*                           b2c
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
*/
Route::get('/','BtocController@index');
Route::get('aboutway','BtocController@aboutway');

Route::get('userlogin','BtocController@userlogin');
Route::get('usersignup','BtocController@usersignup');

Route::post('usersingupsave', ['as' => 'usersingupsave', 'uses' => 'BtocController@usersingupsave']);

Route::post('userchecklogin', ['as' => 'userchecklogin', 'uses' => 'BtocController@userchecklogin']);


Route::get('userdashboard','BtocController@userdashboard');

Route::get('userforgot','BtocController@userforgot');

Route::post('userpasswordreset','BtocController@userpasswordreset')->name('userpasswordreset');

Route::post('search_step3', ['as' => 'search_step3', 'uses' => 'BtocController@search_step3']);


Route::post('search_step_2', ['as' => 'search_step_2', 'uses' => 'BtocController@search_step_2']);

Route::post('guestsearch_step_2', ['as' => 'guestsearch_step_2', 'uses' => 'BtocController@guestsearch_step_2']);

Route::post('guestsearch_step3', ['as' => 'guestsearch_step3', 'uses' => 'BtocController@guestsearch_step3']);

Route::post('usersearch_step_2', ['as' => 'usersearch_step_2', 'uses' => 'BtocController@usersearch_step_2']);
Route::post('usersearch_step3', ['as' => 'usersearch_step3', 'uses' => 'BtocController@usersearch_step3']);




Route::post('newsletter', ['as' => 'newsletter', 'uses' => 'BtocController@newsletter']);

Route::get('news_rport', ['as' => 'news_rport', 'uses' => 'BtocController@news_rport']);





Route::get('Marriagenavbar','BtocController@Marriagenavbar');
Route::get('Partynavbar','BtocController@Partynavbar');
Route::get('Eventnavbar','BtocController@Eventnavbar');
Route::get('Resortsnavbar','BtocController@Resortsnavbar');

/*============================packages=====================================*/

Route::get('cateringnavbar','BtocController@cateringnavbar');
Route::get('decorationnavbar','BtocController@decorationnavbar');
Route::get('Bandsnavbar','BtocController@Bandsnavbar');
Route::get('Mehendinavbar','BtocController@Mehendinavbar');
Route::get('MakeupArtistnavbar','BtocController@MakeupArtistnavbar');
Route::get('BangleShastranavbar','BtocController@BangleShastranavbar');
Route::get('Ornamentsnavbar','BtocController@Ornamentsnavbar');
Route::get('Sangeetnavbar','BtocController@Sangeetnavbar');
Route::get('Purohitnavbar','BtocController@Purohitnavbar');
Route::get('Dancenavbar','BtocController@Dancenavbar');
Route::get('Photographynavbar','BtocController@Photographynavbar');




Route::post('savecateringdetails','BtocController@savecateringdetails')->name('savecateringdetails');
Route::post('saveflowerdetails','BtocController@saveflowerdetails')->name('saveflowerdetails');
Route::post('saveweddingbanddetails','BtocController@saveweddingbanddetails')->name('saveweddingbanddetails');
Route::post('savemehendidetails','BtocController@savemehendidetails')->name('savemehendidetails');

Route::post('savemakeupadetails','BtocController@savemakeupadetails')->name('savemakeupadetails');

Route::post('saveornamentdetails','BtocController@saveornamentdetails')->name('saveornamentdetails');

Route::post('savebangledetails','BtocController@savebangledetails')->name('savebangledetails');
Route::post('savesangeetdetails','BtocController@savesangeetdetails')->name('savesangeetdetails');
Route::post('savepurohithdetails','BtocController@savepurohithdetails')->name('savepurohithdetails');
Route::post('savedancedetails','BtocController@savedancedetails')->name('savedancedetails');

Route::post('savephotodetails','BtocController@savephotodetails')->name('savephotodetails');




Route::post('savebookingdetails','BtocController@savebookingdetails');

Route::post('booking','BtocController@booking');



Route::get('hall_booking','BtocController@hall_booking');



