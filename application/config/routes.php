<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
// $route['default_controller'] = 'customer_register/login';
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin'] = 'admin/login';
$route['dashboard'] = 'admin/dashboard';
$route['profile'] = 'admin/profile';
$route['forgot_admin/(:any)'] = 'admin/login/show_forgot_form/$1';


$route['package_list']='admin/package/index';
$route['package_add']='admin/package/add';
$route['package_edit/(:any)']='admin/package/edit/$1';
$route['package_delete/(:any)']='admin/package/delete/$1';

//Admin module
$route['admin_user_list'] = 'admin/admin_user';
$route['admin_user_add'] = 'admin/admin_user/add_admin_form';
$route['admin_user_edit/(:any)'] = 'admin/admin_user/edit_admin_form/$1';
$route['admin_user_delete/(:any)'] = 'admin/admin_user/delete_admin/$1';

//CPA module
$route['cpa_user_list'] = 'admin/cpa_user';
$route['cpa_user_add'] = 'admin/cpa_user/add_cpa_form';
$route['cpa_user_edit/(:any)'] = 'admin/cpa_user/edit_cpa_form/$1';
$route['cpa_user_delete/(:any)'] = 'admin/cpa_user/delete_cpa/$1';

//Customer module
$route['customer_list'] = 'admin/customer_list';
$route['customer_delete/(:any)'] = 'admin/customer_list/delete_customer/$1';

//Tickets
$route['open_tickets'] = 'admin/tickets_master';
$route['pending_tickets'] = 'admin/tickets_master/pending';
$route['closed_tickets'] = 'admin/tickets_master/closed';

//State
$route['state_list'] = 'admin/state_city';
$route['state_delete/(:any)'] = 'admin/state_city/delete/$1';
$route['city_list'] = 'admin/state_city/city_list';


//Front
$route['login'] = 'customer_register/login';
$route['register'] = 'customer_register/index';
$route['logout'] = 'customer_register/logout';
$route['forgot/(:any)'] = 'customer_register/forgot/$1';


$route['pack_list'] = 'package_list/index';

$route['cpa_list'] = 'cpa_details/index';
$route['get_cpa_details/(:any)'] = 'cpa_details/get_cpa_details/$1';
$route['get_customer_ticket'] = 'ticket_details/index';
$route['get_customer_ticket/(:any)'] = 'ticket_details/index/$1';
$route['contactus'] = 'contact_us/index';
$route['customer_profile'] = 'customer_register/customer_profile';
$route['open_ticket_cpa'] = 'ticket_details_cpa/open_tkt_cpa';
$route['open_ticket_cpa/(:any)'] = 'ticket_details_cpa/open_tkt_cpa/$1';
$route['pending_ticket_cpa'] = 'ticket_details_cpa/pending_tkt_cpa';
$route['closed_ticket_cpa'] = 'ticket_details_cpa/closed_tkt_cpa';
$route['closed_ticket_cpa/(:any)'] = 'ticket_details_cpa/closed_tkt_cpa/$1';
$route['cpa_account'] = 'cpa_account/show_cpa_account';
$route['cpa_review_ratting'] = 'cpa_review_rate/review_ratting';
$route['cpa_contact_us'] = 'contact_us/cpa_contact';
$route['cpa_profile'] = 'cpa_account/cpa_profile';


//API register

$route['package_list_api'] = 'api/package/package';
$route['package_details'] = 'api/package/package/packageDetails';
$route['package_purchase'] = 'api/package/package/packagePurchase';
$route['deduct_count'] = 'api/package/package/deductCount';
$route['add_package'] = 'api/package/package/addPackage';



$route['register_customer_api'] = 'api/customer/register_api';
$route['login_with_facebook'] = 'api/customer/register_api/login_with_facebook';
$route['forgot_pass'] = 'api/customer/login_api/forgot_pass';
$route['apple_with_login'] = 'api/customer/register_api/apple_with_login';
$route['update_zip_code'] = 'api/customer/register_api/update_zip_code';
$route['update_profile_api'] = 'api/customer/register_api';
$route['change_pass_api'] = 'api/customer/register_api/change_password';
$route['get_state_api'] = 'api/customer/register_api/get_state';
$route['get_city_api'] = 'api/customer/register_api/get_city';
$route['login_api'] = 'api/customer/login_api';
$route['logout_api'] = 'api/customer/login_api/logout';
$route['get_cpa_api'] = 'api/customer/cpa_customer_api';
$route['create_ticket_api'] = 'api/customer/tickets_customer_api';
$route['get_customer_ticket_api'] = 'api/customer/tickets_customer_api/get_customer_ticket';
$route['submit_ratting_api'] = 'api/customer/tickets_customer_api/submit_ratting';
$route['closed_ticket_customer_api'] = 'api/customer/tickets_customer_api/get_closed_ticket_customer';
$route['contact_support'] = 'api/customer/contact_us/index';
$route['payment_detail'] = 'api/customer/payment_detail/add_payment_details';
$route['video_notification'] = 'api/customer/tickets_customer_api/video_notification';
$route['video_notification1'] = 'api/customer/tickets_customer_api/video_notification1';

$route['gte_ticket_cpa_api'] = 'api/cpa/ticket_cpa';
$route['get_open_ticket_cpa'] = 'api/cpa/ticket_cpa/open_ticket_data';
$route['change_status'] = 'api/cpa/ticket_cpa/change_status';
$route['review_ratting_cpa_api'] = 'api/cpa/ticket_cpa/get_reviews_ratting';
$route['answer_of_tickets_api'] = 'api/cpa/ticket_cpa/answer_of_tickets';
$route['cpa_profile_api'] = 'api/cpa/cpa_profile';
$route['update_profile_cpa_api'] = 'api/cpa/cpa_profile/update_profile_cpa';

$route['create_tickets_num'] = 'api/customer/tickets_customer_api/create_tickets_num';
$route['add_video_comment'] = 'api/customer/tickets_customer_api/add_video_comment';

$route['show_notification_api'] = 'api/customer/tickets_customer_api/show_notification';
$route['update_notification_status_api'] = 'api/customer/tickets_customer_api/update_notification_status';
$route['get_cpa_data'] = 'api/customer/cpa_customer_api/get_cpa_data';

$route['video_call_request'] = 'api/customer/tickets_customer_api/video_call_request';
$route['video_call_change_status'] = 'api/customer/tickets_customer_api/video_call_change_status';


