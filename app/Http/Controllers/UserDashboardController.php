<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Explorasi;
use App\Models\Project;
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function show(){
        $service = Service::all();
        $experience = Experience::all();
        $project = Project::all();
        $explorasi = Explorasi::all();
        $skill = Skill::all();
        // $kategori = Kategori::all();
        $data = [
            'service' => $service,
            'experience' => $experience,
            'project' => $project,
            'skill' => $skill,
            'explorasi' => $explorasi
        ];


        return view('user.dashboard', $data);
        // echo json_encode($data);
    }
}
