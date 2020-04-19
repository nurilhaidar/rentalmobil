<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\ModelNamaMobil;

class NamaMobil extends Controller
{
    public function create(Request $req){
        $validator = Validator::make($req->all(), [
            'nama_mobil'=>'required',
            'id_jenismobil'=>'required',
        ]);

        if($validator->fails()){
            return Response()->json($validator->errors());
        }

        $make = ModelNamaMobil::create([
            'nama_mobil'=>$req->nama_mobil,
            'id_jenismobil'=>$req->id_jenismobil,
        ]);

        if($make){
            return Response()->json($make);
        } else {
            return Response()->json('GAGAL');
        }
    }

    public function edit(Request $req, $id){
        $validator = Validator::make($req->all(), [
            'nama_mobil' => 'required',
            'id_jenismobil' => 'required',
        ]);

        if($validator->fails()){
            return Response()->json($validator->errors());
        }

        $edit = ModelNamaMobil::where('id', $id)->update([
            'nama_mobil' => $req->nama_mobil,
            'id_jenismobil' => $req->id_jenismobil,
        ]);

        if($edit){
            return Response()->json('BERHASIL');
        } else {
            return Response()->json('GAGAL');
        }
    }

    public function hapus($id){
        $hapus = ModelNamaMobil::where('id', $id)->delete();

        if($hapus){
            return Response()->json('BERHASIL');
        } else {
            return Response()->json('GAGAL');
        }
    }

    public function show(){
        $tampil = ModelNamaMobil::get();

        if($tampil){
            return Response()->json($tampil);
        } else {
            return Response()->json('DATA KOSONG');
        }
    }
}
