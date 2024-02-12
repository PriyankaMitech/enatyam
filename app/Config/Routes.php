<?php

namespace Config;

use App\Controllers\AdminController;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('Contactus', 'Home::Contactus');
$routes->get('refundpolicy', 'Home::RefundPolicy');
$routes->get('invester', 'Home::invester');
$routes->get('TermsAndConditions', 'Home::TermsAndConditions');
$routes->get('Career', 'Home::Career');
$routes->get('Offilinstudio', 'Home::Offilinstudio');
$routes->get('chechk_username_id', 'Home::chechk_username_id');
$routes->post('chechk_username_id', 'Home::chechk_username_id');



$routes->get('chechk_menu_name_id', ' AdminController::chechk_menu_name_id');
$routes->post('chechk_menu_name_id', 'AdminController::chechk_menu_name_id');


$routes->get('check_group_name', ' AdminController::check_group_name');
$routes->post('check_group_name', 'AdminController::check_group_name');



$routes->get('chechk_mobile_no_id', 'Home::chechk_mobile_no_id');
$routes->post('chechk_mobile_no_id', 'Home::chechk_mobile_no_id');



$routes->get('Carrier', 'Home::Carrier');
$routes->get('test', 'Home::test');

$routes->get('PrivacyPolicy', 'Home::PrivacyPolicy');
$routes->get('termsandconditions', 'Home::termsandconditions');

$routes->get('Dance', 'Home::Dance');
$routes->get('Home', 'Home::home');
$routes->get('music', 'Home::music');
$routes->get('Instruments', 'Home::Instruments');
$routes->get('Yoga', 'Home::Yoga');
$routes->get('profile', 'Home::Profile');
$routes->get('blog', 'Home::blog');
$routes->get('StartNowPricing', 'Home::StartNowPricing');
$routes->get('home', 'Home::returnhome');
$routes->get('shop', 'Home::shop'); //i remove for cart issue 

$routes->get('success', 'BillingC::success');
$routes->get('failed', 'BillingC::failed');
$routes->post('PaymentController/payment', 'PaymentController::payment');
$routes->get('PaymentController/success', 'PaymentController::success');
$routes->get('PaymentController/failed', 'PaymentController::failed');
$routes->get('Checkout', 'BillingC::Checkout');
$routes->get('getLogin', 'Home::getLogin');
$routes->get('Session', 'Home::Session');
$routes->get('cart', 'Home::gocart');
$routes->post('bookDemo', 'DemoController::bookDemo'); //for freedemo
$routes->post('BillingInformation', 'BillingC::BillingInformation');
$routes->get('Cart', 'ProductController::showData');
$routes->post('AddToCart', 'ProductController::AddToCart'); //add to cart
$routes->get('showData', 'ProductController::showData'); //fetch data from database
$routes->get('removeProduct/(:num)', 'ProductController::removeProduct/$1'); //removev cart item
$routes->post('sessions/store', 'SessionsController::store');
// $routes->get('AdminDashboard', 'Home::AdminDashboard');

$routes->get('register', 'LoginController::register');
$routes->post('register', 'LoginController::register');
$routes->post('verifymobile', 'LoginController::verifymobile');
// $routes->post('saveUser', 'LoginController::saveUser');
$routes->post('saveuserdata', 'LoginController::saveuserdata');
$routes->get('ModelForLogin', 'LoginController::ModelForLogin');
$routes->get('update_profile_data', 'LoginController::update_profile_data');
$routes->post('update_profile_data', 'LoginController::update_profile_data');

$routes->get('my_account', 'Home::my_account');
$routes->get('Profile2', 'Home::Profile2');
$routes->get('dashboard', 'DashboardController::index');
$routes->get('demoprofile', 'Home::demoprofile');
$routes->get('demoprofile2', 'Home::demoprofile2');
$routes->get('demo1', 'Home::demo1');
$routes->get('demo', 'Home::demo');
$routes->get('demobooking', 'Home::demobooking');

//routes for admin
$routes->post('AdminController/addStudent', 'AdminController::addStudent');
$routes->get('givestudent', 'AdminController::givestudent');
$routes->get('create_group', 'AdminController::create_group');
$routes->post('AdminController/getdate', 'AdminController::getdate');
$routes->get('Admindashboard', 'AdminController::Admindashboard');
$routes->get('getAdminSideBarAll', 'AdminController::getAdminSideBarAll');
$routes->get('payments', 'AdminController::payments');
$routes->get('studentProfiledata', 'AdminController::studentProfiledata');
$routes->get('NewFacultyApplication', 'AdminController::NewFacultyApplication');
$routes->get('uploaded_video', 'AdminController::UplodedvideoByStudent');
$routes->post('AssignTecherForDemo', 'AdminController::AssignTecherForDemo');
$routes->post('AssignFacultyToGroup', 'AdminController::AssignFacultyToGroup');
$routes->post('fetch_groups_for_course', 'AdminController::fetch_groups_for_course');
$routes->post('AssignTecherToStudent', 'AdminController::AssignTecherToStudent');
$routes->post('save-event', 'AdminCalenderController::saveEvent');
$routes->get('getDemoDetails', 'AdminController::getDemoDetails');
$routes->get('DailyClass', 'AdminController::GetClasses');
$routes->get('StudentGroups', 'AdminController::StudentGroups');
$routes->get('FacultyShedule', 'AdminController::FacultysidebarShedule');
$routes->post('AdduserByadmin', 'AdminController::AdduserByadmin');
$routes->post('SelectedForGroup', 'AdminController::SelectedForGroup');
$routes->get('chatuser', 'AdminController::chatuser');
$routes->post('chat', 'AdminController::chatwithteacher');
$routes->get('chatuser/(:any)', 'AdminController::singlechat/$1');
$routes->get('add_notifications', 'AdminController::add_notifications');
$routes->post('insertChat', 'AdminController::insertChat');
$routes->post('setnotification', 'AdminController::setnotification');
$routes->get('viewProfile', 'AdminController::viewProfile');
$routes->post('fetch_records', 'AdminController::fetch_records');
$routes->get('viewProfile/(:any)', 'AdminController::viewProfile/$1');
$routes->get('viewProfiledfaculty/(:any)', 'AdminController::viewProfiledfaculty/$1');



$routes->get('viewProfiles/(:any)', 'AdminController::viewProfiles/$1');

$routes->post('update_seen_status', 'AdminController::update_seen_status');
$routes->get('update_seen_status', 'AdminController::update_seen_status');




// Report Data
$routes->get('demo_classes', 'AdminController::demo_classes');
$routes->get('student', 'AdminController::student');
$routes->get('studentSlots', 'AdminController::studentSlots');

$routes->get('faculty', 'AdminController::faculty');
$routes->get('payment_history', 'AdminController::payment_history');


$routes->get('UploadedImages', 'AdminController::UploadedImages');
$routes->post('searchFacultyVideos', 'AdminController::searchFacultyVideos');

$routes->get('AdminController/searchFacultyVideos', 'AdminController::searchFacultyVideos');

$routes->post('getSearchData', 'AdminController::getSearchData');

$routes->post('AdminController/getTeachersByStudent', 'AdminController::getTeachersByStudent');
$routes->post('AdminController/processSelection', 'AdminController::processSelection');

// Master routes
$routes->post('add_courses', 'AdminController::add_courses');
$routes->get('add_courses', 'AdminController::add_courses');

$routes->post('edit_courses/(:any)', 'AdminController::add_courses/$1');
$routes->get('edit_courses/(:any)', 'AdminController::get_courses/$1');

$routes->post('set_courses', 'AdminController::set_courses');

$routes->post('courses_list', 'AdminController::courses_list');
$routes->get('courses_list', 'AdminController::courses_list');

$routes->get('chechk_courses_name_id', ' AdminController::chechk_courses_name_id');
$routes->post('chechk_courses_name_id', 'AdminController::chechk_courses_name_id');


$routes->post('add_sub_courses', 'AdminController::add_sub_courses');
$routes->get('add_sub_courses', 'AdminController::add_sub_courses');

$routes->post('edit_sub_courses/(:any)', 'AdminController::add_sub_courses/$1');
$routes->get('edit_sub_courses/(:any)', 'AdminController::get_sub_courses/$1');

$routes->post('set_sub_courses', 'AdminController::set_sub_courses');

$routes->post('sub_courses_list', 'AdminController::sub_courses_list');
$routes->get('sub_courses_list', 'AdminController::sub_courses_list');

// $routes->get('chechk_sub_courses_name_id', ' AdminController::chechk_sub_courses_name_id');
$routes->post('chechk_sub_courses_name_id', 'AdminController::chechk_sub_courses_name_id');


// $routes->get('chechk_courses_id_id', ' AdminController::chechk_courses_id_id');
$routes->post('chechk_courses_id_id', 'AdminController::chechk_courses_id_id');

$routes->post('chechk_selected_shedules_time_id', 'AdminController::chechk_selected_shedules_time_id');


$routes->post('get_sub_courses_data', 'AdminController::get_sub_courses_data');
$routes->post('get_student_data', 'AdminController::get_student_data');


$routes->post('get_group_data', 'AdminController::get_group_data');

$routes->post('get_faculty_data', 'AdminController::get_faculty_data');

$routes->post('get_shedule_data', 'AdminController::get_shedule_data');




$routes->post('add_menu', 'AdminController::add_menu');
$routes->get('add_menu', 'AdminController::add_menu');


$routes->post('serch_data_of_group', 'AdminController::serch_data_of_group');
$routes->get('serch_data_of_group', 'AdminController::serch_data_of_group');




$routes->post('student_list_of_group', 'AdminController::student_list_of_group');
$routes->get('student_list_of_group', 'AdminController::student_list_of_group');


$routes->post('menu_list', 'AdminController::menu_list');
$routes->get('menu_list', 'AdminController::menu_list');

$routes->post('user_list', 'AdminController::user_list');
$routes->get('user_list', 'AdminController::user_list');


$routes->post('set_menu', 'AdminController::set_menu');
$routes->post('set_create_group_data', 'AdminController::set_create_group_data');
$routes->post('set_create_group_datas', 'AdminController::set_create_group_datas');


$routes->post('edit_menu/(:any)', 'AdminController::add_menu/$1');
$routes->get('edit_menu/(:any)', 'AdminController::get_menu/$1');

$routes->get('edit_group/(:any)', 'AdminController::edit_group/$1');


$routes->get('AddNewUser', 'AdminController::add_new_user');

$routes->post('edit_user/(:any)', 'AdminController::AdduserByadmin/$1');
$routes->get('edit_user/(:any)', 'AdminController::get_user/$1');


$routes->get('delete/(:any)/(:any)', 'AdminController::delete/$1/$1');
// $routes->post('delete/(:any)/(:any)','AdminController::delete/$1/$1');



$routes->post('Steusupdate', 'AdminController::Steusupdate');
$routes->get('Steusupdate', 'AdminController::Steusupdate');

// $routes->post('AdminController/Steusupdate', 'AdminController::Steusupdate');
$routes->post('AdminController/backtoApplication', 'AdminController::backtoApplication');
$routes->post('AdminController/createpassword', 'AdminController::createpassword');
$routes->post('AdminController/ResheduleByadmin', 'AdminController::ResheduleByadmin');
$routes->post('lostpassword', 'StudentController::lostpassword');
$routes->post('otpvalidate', 'StudentController::otpvalidate');
$routes->post('submitAttendance', 'FacultyController::submitAttendance');
$routes->get('StudentAttendancerecord', 'StudentController::StudentAttendancerecord');
$routes->post('newpassword', 'StudentController::newpassword');
$routes->post('selectStudentSchedule', 'StudentController::selectStudentSchedule');

$routes->get('AdminList', 'AdminController::AdminList');
$routes->get('FacultyAttendance', 'AdminController::FacultyAttendance');


// Routes for Faculty
$routes->get('FacultyProfile', 'Home::FacultyProfile');
$routes->get('FacultySchedule', 'DemoController::todayDemo');
$routes->post('DemoController/resheduleDemo', 'DemoController::resheduleDemo');
$routes->post('demostatus', 'DemoController::demostatus');

$routes->get('SelectSlot', 'FacultyController::MonthlyCalendar');
// $routes->get('MonthlyCalendar', 'FacultyController::MonthlyCalendar');
$routes->get('StudentUploadedVideo', 'FacultyController::StudentuplodedVidio');
$routes->post('saveschedule', 'FacultyController::saveschedule');
$routes->get('FacultyDashboard', 'FacultyController::fetchDataByAssignTeacherId');
$routes->post('save_schedule_data', 'FacultyController::save_schedule_data');
$routes->post('checkData', 'FacultyController::checkData');
$routes->get('giveschedule', 'FacultyController::giveschedule');
$routes->get('fshedule', 'FacultyController::fshedule');
$routes->post('saveshedule', 'FacultyController::saveshedule');
$routes->get('saveshedule', 'FacultyController::saveshedule');

$routes->post('giveschedule', 'FacultyController::giveschedule');
$routes->post('sendmeetinglink', 'FacultyController::sendmeetinglink');
$routes->post('setlinkforgroup', 'FacultyController::setlinkforgroup');
$routes->get('setlinkforgroup', 'FacultyController::setlinkforgroup');
$routes->get('StudentUploadedImages', 'FacultyController::studentUploadedImages');




$routes->get('save_schedule', 'FacultyController::save_schedule');
$routes->post('save_schedule', 'FacultyController::save_schedule');



$routes->get('notification', 'FacultyController::get_all_notification');

// $routes->get('fetchstudyVideouplodeFromstudent', 'FacultyController::fetchstudyVideouplodeFromstudent');
$routes->get('facultyinfo', 'FacultyController::facultyinfo');
$routes->get('addlink', 'FacultyController::addlink');
$routes->get('addlink/(:any)', 'FacultyController::addlink/$i');

// $routes->get('facu', 'FacultyController::index');//email
$routes->get('sendEmail', 'EmailController::sendEmail'); //email
$routes->post('send_mail', 'EmailController::send_mail');
$routes->post('insertProfile', 'DashboardController::insertProfile');

$routes->get('logout', 'LoginController::logout');
$routes->get('studentList', 'DashboardController::studentList');
$routes->get('StudentAttendance', 'FacultyController::StudentAttendance');

$routes->post('uploadVideo', 'FacultyController::uploadVideo');
$routes->post('set_videos', 'FacultyController::set_videos');


$routes->get('fetchTofacultyShuduleSidebar', 'FacultyController::fetchTofacultyShuduleSidebar');

//Routes for Student
$routes->get('StudentDashboard', 'Home::StudentDashboard');
$routes->get('profilemanagment', 'StudentController::profilemanagment');
$routes->post('profilemanagment', 'StudentController::profilemanagment');
$routes->post('changeCountry', 'StudentController::changeCountry');
$routes->post('Studentpasswordupdate', 'StudentController::Studentpasswordupdate');
$routes->post('selectedslotsfromstudent', 'StudentController::selectedslotsfromstudent');
$routes->get('ScheduleStudent', 'StudentController::ScheduleStudent');
$routes->get('SelectDate', 'StudentController::StudentSelectClassDates');
$routes->post('fetchSlotsByDates', 'StudentController::StudentSelectClassDates');
$routes->post('selectslotsbystudent', 'StudentController::selectslotsbystudent');
$routes->post('check_slot_availability', 'StudentController::check_slot_availability');

$routes->get('feedback', 'StudentController::feedback');
$routes->post('savefeedback', 'StudentController::savefeedback');
$routes->post('SessionConduct', 'StudentController::SessionConduct');
$routes->post('submitForm', 'StudentController::submitForm');
$routes->get('reschedule', 'StudentController::reschedule');


$routes->post('get_shedule_data_for_student', 'StudentController::get_shedule_data_for_student');
$routes->post('get_shedule_data_for_group', 'AdminController::get_shedule_data_for_group');



$routes->get('set_student_shedule', 'StudentController::set_student_shedule');
$routes->post('set_student_shedule', 'StudentController::set_student_shedule');





// 
// $routes->get('register', 'LoginController::register');
// $routes->post('register', 'LoginController::register');
$routes->get('login', 'LoginController::checkLoginDetails');
$routes->post('login', 'LoginController::checkLoginDetails');
$routes->get('my_account', 'Home::my_account');
$routes->get('Profile2', 'Home::Profile2');
$routes->get('dashboard', 'DashboardController::index');
$routes->Post('carrier_h', 'CarrierController::carrier_h');
// $routes->get('upload', 'StudentController::uploadMedia');
// $routes->get('media/upload-form', 'StudentController::uploadMedia');

$routes->get('StudentSideBarVideo', 'FacultyController::fetchvideotostudentdashboard');
$routes->get('uploaded_images', 'FacultyController::uploaded_images');
$routes->get('StudentSideBarImages', 'FacultyController::fetchImagesToStudentDashboard');

$routes->get('uploadMedia', 'StudentController::uploadMedia');
$routes->post('uploadMedia', 'StudentController::uploadMedia');
//  $routes->get('StudentSideBarVideo', 'StudentController::StudentSideBarVideo');
$routes->get('StudentAttenadnace', 'StudentController::StudentAttenadnace');
$routes->get('StudentProfile', 'StudentController::StudentProfile');
$routes->get('UplodeVideo', 'StudentController::UplodeVideo');
$routes->get('OrderDetails', 'BillingC::OrderDetails');

// Routes for Dashboard after login
$routes->get('Dashboard', 'DashboardController::displayDashboard');
$routes->get('Attendance', 'AdminController::studentAttendance');

$routes->post('payment', 'PaymentController::payment');
// $routes->post('googlelogin', 'LoginController::googlelogin');
$routes->get('googlelogin', 'LoginController::googlelogin');
$routes->get('User_authentication', 'LoginController::index');
$routes->get('LoginController/callback', 'LoginController::callback');

// zoom routs
$routes->get('update_access_token', 'ZoomApiController::update_access_token');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
  require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
