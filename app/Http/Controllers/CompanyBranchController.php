<?php

namespace App\Http\Controllers;

use App\CompanyBranch;
use App\Company;
use Illuminate\Http\Request;

class CompanyBranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::all();
        
        return view('module.settings.branch',['company' => $company]);
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
            'company_id'=>'required'
            ]);
        $calender = new CompanyBranch;
        $calender->name=$request->name;
        $calender->company_id=$request->company_id;
        $calender->is_active=$request->is_active;
        $calender->save();
        return redirect()->action('CompanyBranchController@index')->with('success', 'Information Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CompanyBranch  $companyBranch
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $branch = CompanyBranch::all();
        return response()->json(array("data" => $branch, "total" => count($branch)));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CompanyBranch  $companyBranch
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyBranch $companyBranch,$id)
    {
         $data =CompanyBranch::find($id);
         $company = Company::all();
        
        return view('module.settings.branch', ['data' => $data, 'company' => $company]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CompanyBranch  $companyBranch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'name'=>'required',
            'company_id'=>'required'
            ]);
        $branch =CompanyBranch::find($id);
        $branch->name=$request->name;
        $branch->company_id=$request->company_id;
        $branch->is_active=$request->is_active;
        $branch->save();
        return redirect()->action('CompanyBranchController@index')->with('success', 'Information Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CompanyBranch  $companyBranch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $del = CompanyBranch::destroy($request->id);
        return 1;
    }
}
