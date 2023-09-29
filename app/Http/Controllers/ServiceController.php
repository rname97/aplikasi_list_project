<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    public function show(){
        $service = Service::all();
        $data = ['service' => $service];
        return view('admin.service.service_data', $data);
    }

    public function viewAddservice(){
        return view('admin.service.service_add');
    }

    public function addservice(Request $request){
        $validator = Validator::make($request->all(), [
            'serviceName' => 'required',
            'serviceDeskripsi' => 'required',
            'serviceIcon' => 'required',
            'serviceActivate' => 'required',
       ]);



       if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
       }else{
            $service = new service();
            $service->serviceName=$request->serviceName;
            $service->serviceDeskripsi=$request->serviceDeskripsi;
            $service->serviceIcon=$request->serviceIcon;
            $service->serviceActivate=$request->serviceActivate;
            $service->save();
            Session::flash('alert-class', 'alert-success');
            Session::flash('message','Record inserted successfully.');
         }
         return redirect('/service');
    }

    public function viewEditService($id){
        $service = service::find($id);
        $data = ['service' => $service];
        return view('admin.service.service_edit', $data);
    }

    public function editservice(Request $request, $id){

    //     $validator = Validator::make($request->all(), [
    //         'serviceName' => 'required',
    //         'serviceDeskripsi' => 'required',
    //         'serviceStatus' => 'required',
    //         'serviceStart' => 'required',
    //         'serviceEnd' => 'required',
    //         'serviceImage.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //         'kategori_id' => 'required',
    //    ]);




        $service = service::find($id);
        $service->serviceName    = $request->serviceName;
        $service->serviceDeskripsi    = $request->serviceDeskripsi;
        $service->serviceIcon    = $request->serviceIcon;
        $service->serviceActivate    = $request->serviceActivate;




        $service->update();
        Session::flash('alert-class', 'alert-success');
        Session::flash('message','Record inserted successfully.');
        return redirect('/service');
    }

    public function deleteService($id){
        $service = service::find($id);
        $service->delete();
        return redirect('/service');
    }
}
