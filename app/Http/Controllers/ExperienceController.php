<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ExperienceController extends Controller
{
    public function show(){
        $experience = Experience::all();
        $data = ['experience' => $experience];
        return view('admin.experience.experience_data', $data);
    }

    public function viewAddExperience(){
        return view('admin.experience.experience_add');
    }

    public function addExperience(Request $request){
        $validator = Validator::make($request->all(), [
            'experienceName' => 'required',
            'experienceCompany' => 'required',
            'experienceLocation' => 'required',
            'experienceDeskripsi' => 'required',
            'experienceStatus' => 'required',
            'experienceStart' => 'required',
            'experienceEnd' => 'required',
            'experienceActivate' => 'required',
       ]);

       if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
       }else{
            $experience = new Experience();
            $experience->experienceName=$request->experienceName;
            $experience->experienceCompany=$request->experienceCompany;
            $experience->experienceLocation=$request->experienceLocation;
            $experience->experienceDeskripsi=$request->experienceDeskripsi;
            $experience->experienceStatus=$request->experienceStatus;
            $experience->experienceStart=$request->experienceStart;
            $experience->experienceEnd=$request->experienceEnd;
            $experience->experienceActivate=$request->experienceActivate;
            $experience->save();
            Session::flash('alert-class', 'alert-success');
            Session::flash('message','Record inserted successfully.');
         }
         return redirect('/experience');
    }
}
