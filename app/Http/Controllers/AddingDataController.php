<?php

namespace App\Http\Controllers;

use App\Models\AddingData;
use Illuminate\Http\Request;

class AddingDataController extends Controller
{
    public function addPage(){
        return view('add');
    }

    public function addData(Request $req){
        $req -> validate([
            "jobtitle" => "required",
            "jobdescription" => "required",
            "range" => "required",
            "average" => "required"
        ]);

        $job = new AddingData();

        $job -> jobtitle = $req -> jobtitle;
        $job -> jobdescription = $req -> jobdescription;
        $job -> range = $req -> range;
        $job -> average = $req -> average;
        $savejob = $job ->save();

        if($savejob){
            return back() -> with ('success', 'Adding new job successfully!');
        }
        else{
            return back() -> with ('fail', 'Something wrong!');
        }
    }
    public function showData(){
        $data = AddingData::all();
        return view('jobs', ['jobs' => $data]);
    }

    public function delete($id)
    {
        $data = AddingData::find($id);
        $data -> delete();
        return redirect('jobs')->with('success','Job Deleted Successfully');
    }

    
    public function editData($id)
    {   
        $data = AddingData::find($id);
        return view ('edit', ['data' => $data]);

    }

    public function updateData(Request $requestdata)
    {
        
        $getdata = AddingData::find($requestdata -> id);
        $getdata -> jobtitle = $requestdata -> jobtitle;
        $getdata -> jobdescription = $requestdata -> jobdescription;
        $getdata -> range = $requestdata -> range;
        $getdata -> average = $requestdata -> average;
        $getdata -> save();
        
        return redirect('jobs')->with('success','Job Data Updated Successfully');
    }
}
