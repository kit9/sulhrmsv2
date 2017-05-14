<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;
use Excel;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('module.settings.country');
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
        $this->validate($request,['name'=>'required']);
        $tab=new Country;
        $tab->name=$request->name;
        $tab->is_active=$request->is_active;
        $tab->save();

        return redirect()->action('CountryController@index')->with('success','Information Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Country  $Country
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $json=Country::all();
        return response()->json(array("data"=>$json,"total"=>count($json)));
    }

    //eloquent example 

    /*
$payments = Payment::join('users', 'users.id', '=', 'payments.id')
        ->select(
          'payments.id', 
          \DB::raw("concat(users.first_name, ' ', users.last_name) as `name`"), 
          'users.email', 
          'payments.total', 
          'payments.created_at')
        ->get();


    */

   
    public function exportExcel()
    {
        $dbfields = Country::all();

        // Initialize the array which will be passed into the Excel
        // generator.
        $excelArray = []; 

        // Define the Excel spreadsheet headers
        $excelArray[] = \DB::getSchemaBuilder()->getColumnListing("countries");

        // Convert each member of the returned collection into an array,
        // and append it to the payments array.
        foreach ($dbfields as $field) {
            $excelArray[] = $field->toArray();
        }

        // Generate and return the spreadsheet
        \Excel::create('CountryData_'.date('d_m_Y_H_i_s'), function($excel) use ($excelArray) {

            // Set the spreadsheet title, creator, and description
            $excel->setTitle('Country');
            $excel->setCreator('HRMS Lv2')->setCompany('Systech Unimax Ltd.');
            $excel->setDescription('Habijabi');

            // Build the spreadsheet, passing in the payments array
            $excel->sheet('sheet1', function($sheet) use ($excelArray) {
                $sheet->fromArray($excelArray, null, 'A1', false, false);
            });

        })->download('xlsx');
    }


    public function exportPdf()
    {
        $dbfields = Country::all();

        // Initialize the array which will be passed into the Excel
        // generator.
        $excelArray = []; 

        // Define the Excel spreadsheet headers
        $excelArray[] = \DB::getSchemaBuilder()->getColumnListing("countries");

        // Convert each member of the returned collection into an array,
        // and append it to the payments array.
        foreach ($dbfields as $field) {
            $excelArray[] = $field->toArray();
        }

        // Generate and return the spreadsheet
        \Excel::create('CountryData_'.date('d_m_Y_H_i_s'), function($excel) use ($excelArray) {

            // Set the spreadsheet title, creator, and description
            $excel->setTitle('Country');
            $excel->setCreator('HRMS Lv2')->setCompany('Systech Unimax Ltd.');
            $excel->setDescription('Habijabi');

            // Build the spreadsheet, passing in the payments array
            $excel->sheet('sheet1', function($sheet) use ($excelArray) {
                $sheet->fromArray($excelArray, null, 'A1', false, false);
            });

        })->download('xlsx');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Country  $Country
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Country::find($id);
        return view('module.settings.country',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Country  $Country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,['name'=>'required']);
        $tab=Country::find($id);
        $tab->name=$request->name;
        $tab->is_active=$request->is_active;
        $tab->save();

        return redirect()->action('CountryController@index')->with('success','Information Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Country  $Country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $del=Country::destroy($request->id);
        return 1;    
    }
}
