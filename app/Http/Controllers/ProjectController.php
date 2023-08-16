<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Kategori;
use Illuminate\Support\Facades\Validator;
use Session;

class ProjectController extends Controller
{
    public function show(){
        $project = Project::all();
        $kategori = Kategori::all();
        $data = ['project' => $project, 'kategori' => $kategori];
        return view('admin.project.project_data', $data);
        // echo json_encode($data);
    }

    public function viewAddProject(){
        $kategori = Kategori::all();
        $data = ['kategori' => $kategori];
        return view('admin.project.project_add', $data);
    }

    public function addProject(Request $request){
        $validator = Validator::make($request->all(), [
            'projectName' => 'required',
            'projectDeskripsi' => 'required',
            'projectStatus' => 'required',
            'projectStart' => 'required',
            'projectEnd' => 'required',
            'projectImage.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'kategori_id' => 'required',
       ]);

        if($request->hasFile('projectImage')){
            $image= $request->file('projectImage');
            $extension= $image->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $image->move('public/Image/', $filename);
        }

       if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
       }else{
            $project = new Project();
            $project->projectName=$request->projectName;
            $project->projectDeskripsi=$request->projectDeskripsi;
            $project->projectStatus=$request->projectStatus;
            $project->projectStart=$request->projectStart;
            $project->projectEnd=$request->projectEnd;
            $project->projectImage=$filename;
            $project->kategori_id=$request->kategori_id;
            $project->save();
            Session::flash('alert-class', 'alert-success');
            Session::flash('message','Record inserted successfully.');
         }
         return redirect('/project_add');
    }

    public function viewEditProject($id){
        $kategori = Kategori::all();
        $project = Project::find($id);
        $data = ['kategori'=> $kategori, 'project' => $project];
        return view('admin.project.project_edit', $data);
    }

    public function editProject(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'projectName' => 'required',
            'projectDeskripsi' => 'required',
            'projectStatus' => 'required',
            'projectStart' => 'required',
            'projectEnd' => 'required',
            'projectImage.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'kategori_id' => 'required',
       ]);

        if($request->hasFile('projectImage')){
            $image= $request->file('projectImage');
            $extension= $image->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $image->move('public/Image/', $filename);
        }


        $project = Project::find($id);
        $project->projectName    = $request->projectName;
        $project->projectDeskripsi    = $request->projectDeskripsi;
        $project->projectStatus    = $request->projectStatus;
        $project->projectStart    = $request->projectStart;
        $project->projectEnd    = $request->projectEnd;
        $project->projectImage    = $filename;
        $project->kategori_id    = $request->kategori_id;
        $project->save();    
        return redirect('/project');
    }

    public function deleteProject($id){
        $project = Project::find($id);
        $project->delete();
        return redirect('/project');
    }
    
}
