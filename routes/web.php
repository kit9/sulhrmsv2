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
// Only For Test Environment

Auth::routes();

Route::get('/', function () {
    return redirect(url('Dashboard'));
});

Route::get('/Blank',function(){
	return view('module.BlankPage.index');
});
Route::get('/Forms',function(){
	return view('module.Forms.index');
});

Route::get('/Kendo',function(){
	return view('module.Kendo.index');
});


//kendo json data
Route::get('KendoTest','KendoController@index');
Route::get('loginLayout',function(){
	return view('authentication.login');
});

Route::get('loginReset',function(){
	return view('authentication.resetpassword');
});

Route::get('loginForget',function(){
	return view('authentication.forgetpassword');
});

//route end test

//Route Group Data
/*Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm');
    Route::post('register', 'Auth\RegisterController@register');
    Route::get('home', 'HomeController@index');
});*/


//pdf dompdf library using composer 
//url = https://github.com/dompdf/dompdf

//Route Group data end 


Route::group(['middleware' => 'auth'], function () {
    //Module Raw Routes 
//Dashboard
    Route::get('/Dashboard','DashboardController@index');

//Employee Info Module RAW Code
    Route::get('/Employee/Employeeinfo','EmployeeInfoController@index');
    Route::post('/Employee/Employeeinfo/Add','EmployeeInfoController@store');
    Route::get('/Employee/Employeeinfo/Edit/{id}','EmployeeInfoController@edit');
    Route::post('/Employee/Employeeinfo/Update/{id}','EmployeeInfoController@update');
    
//Company Module RAW Code
    Route::get('/Settings/Company','CompanyController@index');
    Route::post('/Settings/Company/Add','CompanyController@store');
    Route::get('/Settings/Company/Edit/{id}','CompanyController@edit');
    Route::post('/Settings/Company/Update/{id}','CompanyController@update');

//Department Module RAW Code
    Route::get('/Settings/Department','DepartmentController@index');
    Route::post('/Settings/Department/Add','DepartmentController@store');
    Route::get('/Settings/Department/Edit/{id}','DepartmentController@edit');
    Route::post('/Settings/Department/Update/{id}','DepartmentController@update');

//Section Module RAW Code
    Route::get('/Settings/Section','SectionController@index');
    Route::post('/Settings/Section/Add','SectionController@store');
    Route::get('/Settings/Section/Edit/{id}','SectionController@edit');
    Route::post('/Settings/Section/Update/{id}','SectionController@update');


//Designation Module RAW Code
    Route::get('/Settings/Designation','DesignationController@index');
    Route::post('/Settings/Designation/Add','DesignationController@store');
    Route::get('/Settings/Designation/Edit/{id}','DesignationController@edit');
    Route::post('/Settings/Designation/Update/{id}','DesignationController@update');
    
    //StaffGrade Module RAW Code
    Route::get('/Settings/StaffGrade','StaffGradeController@index');
    Route::post('/Settings/StaffGrade/Add','StaffGradeController@store');
    Route::get('/Settings/StaffGrade/Edit/{id}','StaffGradeController@edit');
    Route::post('/Settings/StaffGrade/Update/{id}','StaffGradeController@update');
    
    //Branch Module RAW Code
    Route::get('/Settings/Branch','CompanyBranchController@index');
    Route::post('/Settings/Branch/Add','CompanyBranchController@store');
    Route::get('/Settings/Branch/Edit/{id}','CompanyBranchController@edit');
    Route::post('/Settings/Branch/Update/{id}','CompanyBranchController@update');
    
    //Calendar Module RAW Code
    Route::get('/Settings/Daytype','DayTypeController@index');
    Route::post('/Settings/Daytype/Add','DayTypeController@store');
    Route::get('/Settings/Daytype/Edit/{id}','DayTypeController@edit');
    Route::post('/Settings/Daytype/Update/{id}','DayTypeController@update');

//Country Module RAW Code
    Route::get('/Settings/Country','CountryController@index');
    Route::post('/Settings/Country/Add','CountryController@store');
    Route::get('/Settings/Country/Edit/{id}','CountryController@edit');
    Route::post('/Settings/Country/Update/{id}','CountryController@update');


//City Module RAW Code
    Route::get('/Settings/City','CityController@index');
    Route::post('/Settings/City/Add','CityController@store');
    Route::get('/Settings/City/Edit/{id}','CityController@edit');
    Route::post('/Settings/City/Update/{id}','CityController@update');

//Gender Module RAW Code
    Route::get('/Settings/Gender','GenderController@index');
    Route::post('/Settings/Gender/Add','GenderController@store');
    Route::get('/Settings/Gender/Edit/{id}','GenderController@edit');
    Route::post('/Settings/Gender/Update/{id}','GenderController@update');

//Marital Status Module RAW Code
    Route::get('/Settings/MaritalStatus','MaritalStatusController@index');
    Route::post('/Settings/MaritalStatus/Add','MaritalStatusController@store');
    Route::get('/Settings/MaritalStatus/Edit/{id}','MaritalStatusController@edit');
    Route::post('/Settings/MaritalStatus/Update/{id}','MaritalStatusController@update');

//Blood Group Module RAW Code
    Route::get('/Settings/BloodGroup','BloodGroupController@index');
    Route::post('/Settings/BloodGroup/Add','BloodGroupController@store');
    Route::get('/Settings/BloodGroup/Edit/{id}','BloodGroupController@edit');
    Route::post('/Settings/BloodGroup/Update/{id}','BloodGroupController@update');
    
    //Supervisor Module RAW Code
    Route::get('/Settings/Supervisor','EmployeeSupervisorController@index');
    Route::post('/Settings/Supervisor/Add','EmployeeSupervisorController@store');
    Route::get('/Settings/Supervisor/Edit/{id}','EmployeeSupervisorController@edit');
    Route::post('/Settings/Supervisor/Update/{id}','EmployeeSupervisorController@update');

    //Calendar Module RAW Code
    Route::get('/Settings/Calendar','CalendarController@index');
    Route::post('/Settings/Calendar/Add','CalendarController@store');
    Route::post('/Settings/calender/show','CalendarController@calendarAlocate');
    Route::get('/Settings/Calendar/Edit/{id}','CalendarController@edit');
    Route::post('/Settings/Calendar/Update/{id}','CalendarController@update');

    //Calendar Check Module RAW Code
    Route::get('/Settings/Check/Calendar','CalendarController@checkIndex');

//Module Json Routes

//Company Module JSON
    Route::get('/Employee/Employeeinfo/Json','EmployeeInfoController@show');
    Route::post('/Employee/Employeeinfo/Delete','EmployeeInfoController@destroy');
    
    //Calendar Module JSON
    Route::get('/Settings/Calendar/Json','CalendarController@show');
    Route::post('/Settings/Calendar/Get/Year/Json','CalendarController@getYear');
    Route::post('/Settings/Calendar/Get/Month/Json','CalendarController@getMonth');
    Route::post('/Settings/Calendar/Delete','CalendarController@destroy');
    
//Company Module JSON
    Route::get('/Settings/Company/Json','CompanyController@show');
    Route::post('/Settings/Company/Delete','CompanyController@destroy');
    
    //Department Module JSON
    Route::get('/Settings/Department/Json','DepartmentController@show');
    Route::post('/Settings/Department/Delete','DepartmentController@destroy');
    
    //Section Module JSON
    Route::get('/Settings/Section/Json','SectionController@show');
    Route::post('/Settings/Section/Delete','SectionController@destroy');
    
    //Staffgrade Module JSON
    Route::get('/Settings/StaffGrade/Json','StaffGradeController@show');
    Route::post('/Settings/StaffGrade/Delete','StaffGradeController@destroy');
    
   //Designation Module JSON
    Route::get('/Settings/Designation/Json','DesignationController@show');
    Route::post('/Settings/Designation/Delete','DesignationController@destroy');
    
    //Branch Module JSON
    Route::get('/Settings/Branch/Json','CompanyBranchController@show');
    Route::post('/Settings/Branch/Delete','CompanyBranchController@destroy');
    
    //Daytype Module JSON
    Route::get('/Settings/Daytype/Json','DayTypeController@show');
    Route::post('/Settings/Daytype/Delete','DayTypeController@destroy');
    
//Country Module JSON
    Route::get('/Settings/Country/Json','CountryController@show');
    Route::post('/Settings/Country/Delete','CountryController@destroy');
    Route::get('/Settings/Country/Export/Excel',['as' => 'settings.country.export.excel','uses' => 'CountryController@exportExcel']);

//City Module JSON
    Route::get('/Settings/City/Json','CityController@show');
    Route::post('/Settings/City/Delete','CityController@destroy');

//Gender Module JSON
    Route::get('/Settings/Gender/Json','GenderController@show');
    Route::post('/Settings/Gender/Delete','GenderController@destroy');

//Marital Status Module JSON
    Route::get('/Settings/MaritalStatus/Json','MaritalStatusController@show');
    Route::post('/Settings/MaritalStatus/Delete','MaritalStatusController@destroy');

//Blood Group Module JSON
    Route::get('/Settings/BloodGroup/Json','BloodGroupController@show');
    Route::post('/Settings/BloodGroup/Delete','BloodGroupController@destroy');

    //Supervisor Module JSON
    Route::get('/Settings/Supervisor/Json','EmployeeSupervisorController@show');
    Route::post('/Settings/Supervisor/Delete','EmployeeSupervisorController@destroy');

//basic login module 
//vendor is hacked :D





});




//return view('module.settings.gender');
