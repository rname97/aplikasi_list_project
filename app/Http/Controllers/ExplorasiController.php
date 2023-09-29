<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Explorasi;
use App\Models\ExplorasiImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ExplorasiController extends Controller
{
    public function show(){
        $explorasi = Explorasi::all();
        $kategori = Kategori::all();
        $data = ['explorasi' => $explorasi, 'kategori' => $kategori];
        return view('admin.explorasi.explorasi_data', $data);
    }

    public function viewAddExplorasi(){
        $kategori = Kategori::all();
        $data = ['kategori' => $kategori];
        return view('admin.explorasi.explorasi_add', $data);
    }

    public function addExplorasi(Request $request){
        $validator = Validator::make($request->all(), [
            'explorasiName' => 'required',
            'explorasiDeskripsi' => 'required',
            'explorasiImageCover.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'kategori_id' => 'required',
            'explorasiActivate' => 'required',
       ]);

       $filename = '';

        if($request->hasFile('explorasiImageCover')){
            $image= $request->file('explorasiImageCover');
            $extension= $image->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $image->move('public/Image/', $filename);
        }

       if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
       }else{
            $explorasi = new explorasi();
            $explorasi->explorasiName=$request->explorasiName;
            $explorasi->explorasiDeskripsi=$request->explorasiDeskripsi;
            $explorasi->explorasiImageCover=$filename;
            $explorasi->kategori_id=$request->kategori_id;
            $explorasi->explorasiActivate=$request->explorasiActivate;
            $explorasi->save();
            Session::flash('alert-class', 'alert-success');
            Session::flash('message','Record inserted successfully.');
         }
         return redirect('/explorasi');
    }

    public function viewEditExplorasi($id){
        $kategori = Kategori::all();
        $explorasi = Explorasi::find($id);
        $data = ['kategori'=> $kategori, 'explorasi' => $explorasi];
        return view('admin.explorasi.explorasi_edit', $data);
    }

    public function editExplorasi(Request $request, $id){

    //     $validator = Validator::make($request->all(), [
    //         'explorasiName' => 'required',
    //         'explorasiDeskripsi' => 'required',
    //         'explorasiStatus' => 'required',
    //         'explorasiStart' => 'required',
    //         'explorasiEnd' => 'required',
    //         'explorasiImage.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //         'kategori_id' => 'required',
    //    ]);


        $newName = '';
        if($request->hasFile('explorasiImageCover')){
            $image= $request->file('explorasiImageCover');
            $extension= $image->getClientOriginalExtension();
            $newName = time().'.'.$extension;
            $image->move('public/Image/', $newName);
        }else{
            $newName = $request->explorasiImageCoverCurent;
        }

        $explorasi = Explorasi::find($id);
        $explorasi->explorasiName    = $request->explorasiName;
        $explorasi->explorasiDeskripsi    = $request->explorasiDeskripsi;
        $explorasi->explorasiImageCover    = $newName;
        $explorasi->kategori_id    = $request->kategori_id;
        $explorasi->explorasiActivate    = $request->explorasiActivate;
        $explorasi->update();
        Session::flash('alert-class', 'alert-success');
        Session::flash('message','Record inserted successfully.');
        return redirect('/explorasi');
    }

    public function deleteExplorasi($id){
        $explorasi = Explorasi::find($id);
        $explorasi->delete();
        return redirect('/explorasi');
    }


    public function viewImageListexplorasi($id){
        $explorasi = Explorasi::find($id);
        $explorasiImage = ExplorasiImage::where('explorasi_id', $id)->get();
        $data = ['id' => $id, 'explorasi' => $explorasi, 'dataExplorasiImage'=>$explorasiImage];
        return view('admin.explorasi.explorasi_image_data', $data);
    }




    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'explorasi_id ' => 'required',
            'explorasiImage.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $zx = array();
        foreach ($request->explorasiImage as $imagefile) {

            $explorasi = new ExplorasiImage();
            $image= $imagefile;
            $extension= $imagefile->getClientOriginalExtension();
            $string = rand(2,50);
            $filename = $string . time().'.'.$extension;
            $path = $image->move('public/Image/', $filename);
            $explorasi->explorasiImage = $filename;
            $explorasi->explorasi_id = $request->explorasi_id;
            $explorasi->save();
          }



        Session::flash('alert-class', 'alert-success');
        Session::flash('message','Record inserted successfully.');
        return redirect('/explorasi');

    }

    public function deleteImageExplorasi(Request $request){
        // echo json_encode($request->image);
        // $explorasi = explorasiImage::find($id);
        $imageExplorasi = ['explorasi_id' => $request->explorasi_id, 'explorasiImage' => $request->explorasiImage];
        $explorasi = ExplorasiImage::where($imageExplorasi);
        // echo json_encode($explorasi);

        $explorasi->delete();

        return response()->json(['message' => 'Records deleted successfully']);
        // return redirect('/explorasi');
    }
}
