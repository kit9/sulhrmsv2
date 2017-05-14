<?php

namespace App\Http\Controllers;

use App\Designation;
use App\Department;
use App\Company;
use App\Section;
use Illuminate\Http\Request;

class DesignationController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $section = Section::all();
        $company = Company::all();
        $department = Department::all();
        return view('module.settings.designation', ['section' => $section, 'company' => $company, 'department' => $department]);
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
        $this->validate($request, [
            'name' => 'required',
            'company_id' => 'required',
            'department_id' => 'required',
            'section_id' => 'required',
        ]);
        $tab = new Designation;
        $tab->name = $request->name;
        $tab->company_id = $request->company_id;
        $tab->department_id = $request->department_id;
        $tab->section_id = $request->section_id;
        $tab->is_active = $request->is_active;
        $tab->save();

        return redirect()->action('DesignationController@index')->with('success', 'Information Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function show(Designation $designation) {
        $designation = Designation::all();
        return response()->json(array("data" => $designation, "total" => count($designation)));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function edit(Designation $designation, $id) {
        $data = Designation::find($id);
        $section = Section::all();
        $company = Company::all();
        $department = Department::all();
        return view('module.settings.designation', ['data' => $data, 'section' => $section, 'company' => $company, 'department' => $department]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id) {
        $this->validate($request, [
            'name' => 'required',
            'company_id' => 'required',
            'department_id' => 'required',
            'section_id' => 'required',
        ]);
        $tab = Designation::find($id);
        $tab->name = $request->name;
        $tab->company_id = $request->company_id;
        $tab->department_id = $request->department_id;
        $tab->section_id = $request->section_id;
        $tab->is_active = $request->is_active;
        $tab->save();

        return redirect()->action('DesignationController@index')->with('success', 'Information Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request) {
        $del = Designation::destroy($request->id);
        return 1;
    }

}
