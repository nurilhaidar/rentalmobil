<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\ModelDataTransaksi;

class DataTransaksi extends Controller
{
    public function create(Request $req){
        $validator = Validator::make($req->all(),[
            'id_penyewa'=>'required',
            'id_mobil'=>'required',
            'id_petugas'=>'required',
        ]);

        if($validator->fails()){
            return Response()->json($validator->errors());
        }

        $make = ModelDataTransaksi::create([
            'id_penyewa'=>$req->id_penyewa,
            'id_mobil'=>$req->id_mobil,
            'id_petugas'=>$req->id_petugas,
        ]);

        if($make){
            return Response()->json($make);
        } else {
            return Response()->json('GAGAL');
        }
    }

    public function edit($id, Request $req){
        $validator = Validator::make($req->all(),[
            'id_penyewa'=>'required',
            'id_mobil'=>'required',
            'id_petugas'=>'required',
        ]);

        if($validator->fails()){
            return Response()->json($validator->errors());
        }

        $edit = ModelDataTransaksi::where('id', $id)->update([
            'id_penyewa'=>$req->id_penyewa,
            'id_mobil'=>$req->id_mobil,
            'id_petugas'=>$req->id_petugas,
        ]);

        if($edit){
            return Response()->json('BERHASIL');
        } else {
            return Response()->json('GAGAL');
        }
    }

    public function hapus($id){
        $hapus = ModelDataTransaksi::where('id', $id)->delete();

        if($hapus){
            return Response()->json('BERHASIL');
        } else {
            return Response()->json('GAGAL');
        }
    }

    public function show(){
        $tampil = ModelDataTransaksi::get();

        if($tampil){
            return Response()->json($tampil);
        } else {
            return Response()->json('DATA KOSONG');
        }
    }
}
