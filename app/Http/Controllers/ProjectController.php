<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Kategori;
use App\Models\ProjectImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

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
            'projectImageCover.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'kategori_id' => 'required',
            'projectActivate' => 'required',
       ]);

       $filename = '';

        if($request->hasFile('projectImageCover')){
            $image= $request->file('projectImageCover');
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
            $project->projectStart = date('Y-m-d', strtotime($request->projectStart));
            $project->projectEnd=date('Y-m-d', strtotime($request->projectEnd));
            $project->projectImageCover=$filename;
            $project->kategori_id=$request->kategori_id;
            $project->projectActivate=$request->projectActivate;
            $project->save();
            Session::flash('alert-class', 'alert-success');
            Session::flash('message','Record inserted successfully.');
         }
         return redirect('/project');
    }

    public function viewEditProject($id){
        $kategori = Kategori::all();
        $project = Project::find($id);
        $data = ['kategori'=> $kategori, 'project' => $project];
        return view('admin.project.project_edit', $data);
    }

    public function editProject(Request $request, $id){

    //     $validator = Validator::make($request->all(), [
    //         'projectName' => 'required',
    //         'projectDeskripsi' => 'required',
    //         'projectStatus' => 'required',
    //         'projectStart' => 'required',
    //         'projectEnd' => 'required',
    //         'projectImage.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //         'kategori_id' => 'required',
    //    ]);


        $newName = '';
        if($request->hasFile('projectImageCover')){
            $image= $request->file('projectImageCover');
            $extension= $image->getClientOriginalExtension();
            $newName = time().'.'.$extension;
            $image->move('public/Image/', $newName);
        }else{
            $newName = $request->projectImageCoverCurent;
        }

        $project = Project::find($id);
        $project->projectName    = $request->projectName;
        $project->projectDeskripsi    = $request->projectDeskripsi;
        $project->projectStatus    = $request->projectStatus;
        $project->projectStart    = $request->projectStart;
        $project->projectEnd    = $request->projectEnd;
        $project->projectImageCover    = $newName;
        $project->kategori_id    = $request->kategori_id;
        $project->projectActivate    = $request->projectActivate;




        $project->update();
        Session::flash('alert-class', 'alert-success');
            Session::flash('message','Record inserted successfully.');
        return redirect('/project');
    }

    public function deleteProject($id){
        $project = Project::find($id);
        $project->delete();
        return redirect('/project');
    }


    public function viewDetailProject($id){
        // $kategori = Kategori::all();
        $project = Project::find($id);
        $projectImage = ProjectImage::where('project_id', $id)->get();

        $data = ['id' => $id, 'project' => $project, 'projectImage'=>$projectImage];
        // dd($data);
        // die();
        return view('admin.project.project_detail', $data);
    }


    public function storeMedia(Request $request){
        $path = storage_path('tmp/uploads');

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $file = $request->file('file');

        $name = uniqid() . '_' . trim($file->getClientOriginalName());

        $file->move($path, $name);

        return response()->json([
            'name'          => $name,
            'original_name' => $file->getClientOriginalName(),
        ]);
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'project_id ' => 'required',
            'projectImage.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        foreach($request->projectImage as $rowImage){
            $project = new ProjectImage();
            $project->project_id=$request->project_id;
            $project->projectImage=$rowImage;
            $project->save();
        }
        Session::flash('alert-class', 'alert-success');
        Session::flash('message','Record inserted successfully.');
        return redirect('/project');

    }

}
