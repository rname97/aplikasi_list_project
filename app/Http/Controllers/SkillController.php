<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SkillController extends Controller
{
    public function show(){
        $skill = Skill::all();
        return view('admin.skill.skill_data', ['skill'=>$skill]);
    }

    public function viewAddSkill(){
        return view('admin.skill.skill_add');
    }

    public function addSkill(Request $request){

        $validator = Validator::make($request->all(), [
            'skillName' => 'required',
            'skillImage.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'skillActivate' => 'required',
        ]);

        // dd($validator);
        // die();

        // $filename = '';
        if($request->hasFile('skillImage')){


            $image= $request->file('skillImage');
            $extension= $image->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $image->move('public/Image/', $filename);
        }
        // dd($filename);
        // die();

       if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
       }else{
            $skill= new Skill();
            $skill->skillName=$request->skillName;
            $skill->skillImage=$filename;
            $skill->skillActivate=$request->skillActivate;
            $skill->save();
            Session::flash('alert-class', 'alert-success');
            Session::flash('message','Record inserted successfully.');
         }
         return redirect('/skill_add');
    }

    public function viewEditSkill($id){
        $rowSkill = Skill::find($id);
        return view('admin.skill.skill_edit', ['rowSkill' => $rowSkill]);
    }



    public function editSkill(Request $request, $id){
        $newName = '';
        if($request->hasFile('skillImage')){
            $image= $request->file('skillImage');
            $extension= $image->getClientOriginalExtension();
            $newName = time().'.'.$extension;
            $image->move('public/Image/', $newName);
        }else{
            $newName = $request->skillImage;
        }

        $skill = Skill::find($id);
        $skill->skillName    = $request->skillName;
        $skill->skillImage    = $newName;
        $skill->skillActivate=$request->skillActivate;


        $skill->update();
        Session::flash('alert-class', 'alert-success');
        Session::flash('message','Record inserted successfully.');


        return redirect('/skill');
    }

    public function deleteSkill($id){
        $skill = Skill::find($id);
        $skill->delete();
        return redirect('/skill');
    }
}
