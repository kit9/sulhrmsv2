<?php

namespace App\Http\Controllers;

use App\EmployeeCompany;
use App\EmployeeStaffGrade;
use App\EmployeeCompanyBranch;
use App\EmployeeDepartment;
use App\EmployeeDesignation;
use App\EmployeeSection;
use App\EmployeeJobExperienceHistory;
use App\EmployeeInfo;
use App\Department;
use App\Company;
use App\Country;
use App\City;
use App\MaritalStatus;
use Illuminate\Http\Request;
use App\Gender;
use App\BloodGroup;
use App\Designation;
use App\Section;
use App\CompanyBranch;

class EmployeeInfoController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $company = Company::all();
        $department = Department::all();
        $country = Country::all();
        $city = City::all();
        $marital_status = MaritalStatus::all();
        $gender = Gender::all();
        $bloodGroup = BloodGroup::all();
        $designation = Designation::all();
        $section = Section::all();
        $branch = CompanyBranch::all();


        return view('module.Employee.employeeinfo', ['com' => $company, 'department' => $department, 'section' => $section, 'branch' => $branch, 'designation' => $designation, 'country' => $country, 'city' => $city, 'marital_status' => $marital_status, 'gender' => $gender, 'bloodGroup' => $bloodGroup]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
//        $this->validate($request, [
//            'fname' => 'required',
//            'lname' => 'required',
//            'email' => 'required',
//            'phone' => 'required',
//            'address' => 'required',
//            'city_id' => 'required',
//            'country_id' => 'required',
//            'blood_id' => 'required',
//            'gender_id' => 'required',
//            'marital_id' => 'required',
//            'DOB' => 'required',
//            'company_id' => 'required',
//            'department_id' => 'required',
//            'section_id' => 'required',
//            'branch_id' => 'required',
//            'supervisor' => 'required',
//            'effective_date' => 'required',
//            'designation_id' => 'required',
//            'emp_code' => 'required',
//        ]);
        $basic = new EmployeeInfo;
        $basic->first_name = $request->fname;
        $basic->last_name = $request->lname;
        $basic->email = $request->email;
        $basic->phone = $request->phone;
        $basic->address = $request->address;
        $basic->city = $request->city_id;
        $basic->country = $request->country_id;
        $basic->blood_group = $request->blood_id;
        $basic->gender = $request->gender_id;
        $basic->marital_status = $request->marital_id;
        $basic->dob = $request->DOB;



        $compa = new EmployeeCompany;
        $compa->company_id = $request->company_id;
        $compa->emp_code = $request->emp_code;
        $compa->company_effective_start_date = $request->effective_date;
        $compa->company_effective_end_date = $request->effective_date;
        $compa->status = '1';

        $dept = new EmployeeDepartment;
        $dept->department_id = $request->department_id;
        $dept->emp_code = $request->emp_code;
        $dept->company_id = $request->company_id;
        $dept->department_effective_start_date = $request->effective_date;
        $dept->department_effective_end_date = $request->effective_date;
        $dept->status = '1';

        $sec = new EmployeeSection;
        $sec->section_id = $request->section_id;
        $sec->emp_code = $request->emp_code;
        $sec->company_id = $request->company_id;
        $sec->department_id = $request->department_id;
        $sec->section_effective_start_date = $request->effective_date;
        $sec->section_effective_end_date = $request->effective_date;
        $sec->status = '1';


        $desi = new EmployeeDesignation;
        $desi->designation_id = $request->designation_id;
        $desi->emp_code = $request->emp_code;
        $desi->company_id = $request->company_id;
        $desi->department_id = $request->department_id;
        $desi->desigantion_effective_start_date = $request->effective_date;
        $desi->desigantion_effective_end_date = $request->effective_date;
        $desi->status = '1';

        $branch = new EmployeeCompanyBranch;
        $branch->branch_id = $request->branch_id;
        $branch->emp_code = $request->emp_code;
        $branch->company_id = $request->company_id;
        $branch->branch_effective_start_date = $request->effective_date;
        $branch->branch_effective_end_date = $request->effective_date;
        $branch->status = '1';

        $job = new EmployeeJobExperienceHistory;
//        $job->company_name = $request->com_name;
//        $job->company_address = $request->com_address;
//        $job->desigantion = $request->com_desigantion;
//        $job->responsibility = $request->com_responsibility;
//        $job->start_date = $request->com_s_date;
//        $job->end_date = $request->com_e_date;
//        $job->cirtificateupload = $request->com_upload;

       $checkBox = array();
         $checkBox = EmployeeInfoController::get('com_name');
         $id = EmployeeInfoController::get('id');
         
         $newSafety = new Extra;
         
         foreach($checkBox as $safety){
             
             $job->offer_id = $id;
             $job->car_id   = $safety;
             $job->car      = 15;
             $job->save();
         
         }


       // $job->save();

        // $compa->save();
        // $dept->save();
        // $sec->save();
        // $desi->save();
        // $branch->save();
        //$basic->save();



        return redirect()->action('EmployeeInfoController@index')->with('success', 'Information Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EmployeeInfo  $employeeInfo
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeInfo $employeeInfo) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EmployeeInfo  $employeeInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(EmployeeInfo $employeeInfo) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EmployeeInfo  $employeeInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmployeeInfo $employeeInfo) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EmployeeInfo  $employeeInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeeInfo $employeeInfo) {
        //
    }

}
