<?php

namespace App\Http\Controllers;

use App\Department;
use App\Company;
use App\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       $company = Company::all();
       $department = Department::all();
        return view('module.settings.section', ['company' => $company,'department'=> $department]);
        
       
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
        $this->validate($request,[
            'name'=>'required',
            'company_id'=>'required',
            'department_id'=>'required',
            ]);
        $tab=new Section;
        $tab->name=$request->name;
        $tab->company_id=$request->company_id;
        $tab->department_id=$request->department_id;
        $tab->is_active=$request->is_active;
        $tab->save();

        return redirect()->action('SectionController@index')->with('success','Information Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    
        $section = Section::all();
        return response()->json(array("data" => $section, "total" => count($section)));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Section::find($id);
        $company = Company::all();
        $department = Department::all();
        return view('module.settings.section', ['data'=> $data,'company' => $company,'department'=> $department]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required',
            'company_id'=>'required',
            'department_id'=>'required',
            ]);
        $tab=Section::find($id);
        $tab->name=$request->name;
        $tab->company_id=$request->company_id;
        $tab->department_id=$request->department_id;
        $tab->is_active=$request->is_active;
        $tab->save();

        return redirect()->action('SectionController@index')->with('success','Information Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $del = Section::destroy($request->id);
        return 1;
    }
}
