<?php

namespace App\Http\Controllers;

use App\StaffGrade;
use App\Company;
use Illuminate\Http\Request;

class StaffGradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::all();
        return view('module.settings.staffGrade', ['company' => $company]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['name'=>'required','company_id'=>'required']);
        $staffGrade=new StaffGrade;
        $staffGrade->name=$request->name;
        $staffGrade->company_id=$request->company_id;
        $staffGrade->is_active=$request->is_active;
        $staffGrade->save();
        return redirect()->action('StaffGradeController@index')->with('success', 'Information Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StaffGrade  $staffGrade
     * @return \Illuminate\Http\Response
     */
    public function show(StaffGrade $staffGrade)
    {
        $designation = StaffGrade::all();
        return response()->json(array("data" => $designation, "total" => count($designation)));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StaffGrade  $staffGrade
     * @return \Illuminate\Http\Response
     */
    public function edit(StaffGrade $staffGrade,$id)
    {
        $data = StaffGrade::find($id);
        $company = Company::all();
        
        return view('module.settings.staffGrade', ['data' => $data, 'company' => $company]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StaffGrade  $staffGrade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,['name'=>'required','company_id'=>'required']);
        $staffGrade= StaffGrade::find($id);
        $staffGrade->name=$request->name;
        $staffGrade->company_id=$request->company_id;
        $staffGrade->is_active=$request->is_active;
        $staffGrade->save();
        return redirect()->action('StaffGradeController@index')->with('success', 'Information Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StaffGrade  $staffGrade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $del = StaffGrade::destroy($request->id);
        return 1;
    }
}
