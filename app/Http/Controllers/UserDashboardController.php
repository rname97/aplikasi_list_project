<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function show(){
        $project = Project::all();
        $skill = Skill::all();
        // $kategori = Kategori::all();
        $data = ['project' => $project, 'skill' => $skill];
        return view('user.dashboard', $data);
        // echo json_encode($data);
    }
}
