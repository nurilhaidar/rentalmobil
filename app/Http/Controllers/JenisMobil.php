<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelJenisMobil;
use Validator;

class JenisMobil extends Controller
{
    public function create(Request $req){
        $validator = Validator::make($req->all(),[
            'jenis'=>'required',
        ]);

        if($validator->fails()){
            return Response()->json($validator->errors());
        }

        $make = ModelJenisMobil::create([
            'jenis'=>$req->jenis,
        ]);

        if($make){
            return Response()->json($make);
        } else {
            return Response()->json('GAGAL');
        }
    }

    public function edit($id, Request $req){
        $validator = Validator::make($req->all(),[
            'jenis'=>'required',
        ]);

        if($validator->fails()){
            return Response()->json($validator->errors());
        }

        $edit = ModelJenisMobil::where('id', $id)->update([
            'jenis'=>$req->jenis,
        ]);

        if($edit){
            return Response()->json('BERHASIL');
        } else {
            return Response()->json('GAGAL');
        }
    }

    public function hapus($id){
        $hapus = ModelJenisMobil::where('id', $id)->delete();

        if($hapus){
            return Response()->json('BERHASIL');
        } else {
            return Response()->json('GAGAL');
        }
    }

    public function show(){
        $tampil = ModelJenisMobil::get();

        if($tampil){
            return Response()->json($tampil);
        } else {
            return Response()->json('DATA KOSONG');
        }
    }
}
