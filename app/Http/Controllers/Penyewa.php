<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use JWTAuth;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\ModelPenyewa;

class Penyewa extends Controller
{
    public function register(Request $req){
        $validator = Validator::make($req->all(), [
            'nama_penyewa'=>'required',
            'alamat_penyewa'=>'required',
            'foto_ktp'=>'required',
        ]);

        if($validator->fails()){
            return Response()->json($validator->errors());
        }

        $make = ModelPenyewa::create([
            'nama_penyewa'=>$req->nama_penyewa,
            'alamat_penyewa'=>$req->alamat_penyewa,
            'foto_ktp'=>$req->foto_ktp,
        ]);

        if($make){
            return Response()->json($make);
        } else {
            return Response()->json('GAGAL');
        }
    }

    public function edit($id, Request $req){
        $validator = Validator::make($req->all(), [
            'nama_penyewa' => 'required',
            'alamat_penyewa' => 'required',
            'foto_ktp' => 'required',
        ]);

        if($validator->fails()){
            return Response()->json($validator->errors());
        }

        $edit = ModelPenyewa::where('id', $id)->update([
            'nama_penyewa' => $req->nama_penyewa,
            'alamat_penyewa' => $req->alamat_penyewa,
            'foto_ktp' => $req->foto_ktp,
        ]);

        if($edit){
            return Response()->json('BERHASIL');
        } else {
            return Response()->json('GAGAL');
        }
    }

    public function hapus($id){
        $delete = ModelPenyewa::where('id', $id)->delete();

        if($delete){
            return Response()->json('BERHASIL');
        } else {
            return Response()->json('GAGAL');
        }
    }

    public function show(){
        $tampil = ModelPenyewa::get();

        if($tampil){
            return Response()->json($tampil);
        } else {
            return Response()->json('DATA KOSONG');
        }
    }
}
