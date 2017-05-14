<?php

namespace App\Http\Controllers;

use App\Department;
use App\Company;
use Illuminate\Http\Request;

class DepartmentController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $company = Company::all();

        return view('module.settings.department', ['company' => $company]);
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
        ]);
        $tab = new Department;
        $tab->name = $request->name;
        $tab->company_id = $request->company_id;

        $tab->is_active = $request->is_active;
        $tab->save();

        return redirect()->action('DepartmentController@index')->with('success', 'Information Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department) {
        $json = Department::all();
        return response()->json(array("data" => $json, "total" => count($json)));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department, $id) {
        $data = Department::find($id);
        $company = Company::all();
        return view('module.settings.department', ['data' => $data, 'company' => $company]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $this->validate($request, [
            'name' => 'required',
            'company_id' => 'required',
        ]);
        $tab = Department::find($id);
        $tab->name = $request->name;
        $tab->company_id = $request->company_id;

        $tab->is_active = $request->is_active;
        $tab->save();

        return redirect()->action('DepartmentController@index')->with('success','Information Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request) {
        $del = Department::destroy($request->id);
        return 1;
    }

}
