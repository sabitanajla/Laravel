<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view ('user/index', ['kategoriuser'=>'Admin']);
    }

    public function daftar()
    {
        $ar_kategori = ["Dosen", "Mahasiswa", "Staff", "Alumni"];
        return view('user/daftar', ['kategori'=>$ar_kategori]);
    }


    public function store(Request $request){
        $nama = $request->input('nama');
        $email = $request->input('email');
        $kategori = $request->input('kategori');
        $alamat = $request->input('alamat');
        return view('user/sukses',
            ['nama'=>$nama, 'email'=>$email, 'kategori'=>$kategori, 'alamat'=>$alamat]);
    }


    public function data()
    {
        $ar_data = ["puasa", "2 jam setelah makan", "Sewaktu/acak"];
        return view('Praktikum9/data', ['data'=>$ar_data]);
    }

    public function hasil(Request $request){
        $nama = $request->input('nama');
        $tgl = $request->input('tgl');
        $lahir = $request->input('lahir');
        $jk = $request->input('jk');

        $td = $request->input('td');
        $drh= "";
        if ($td == "120/80") {
            $drh = "Normal";
            
        }else{
            $drh = "Tidak Normal";
        }

        $asam = $request->input('asam');
        $au = "";
        if ($jk == "Laki-Laki") {
            if ($asam <= 7) {
                $au = "Normal";
            } else{
                $au = "Tidak Normal";
            }
        } elseif ($jk == "Perempuan") {
            if ($asam <= 6) {
                $au = "Normal";
            } else{
                $asam = "Tidak Normal";
            }
        }

        $kl = $request->input('kl');
        $koles = "";
        if ($kl <= 200) {
            $koles = "Normal";
            
        }else{
            $koles = "Tidak Normal";
            
        }

        $data = $request->input('data');
        $gd = $request->input('gd');
        $gula = "";
        if ($data == "puasa") {
            if ($gd >= 70 && $gd <= 110) {
                $gula = "Normal";
            } else {
                $gula = "Tidak Normal";
            }
        } elseif ($data == "2 jam setelah makan") {
            if ($gd >= 100 && $gd <= 150) {
                $gula = "Normal";
            } else{
                $gula = "Tidak Normal"; 
            }
        }
        elseif ($data == "Sewaktu/acak") {
            if ($gd >= 70 && $gd <= 125) {
                $gula = "Normal";
            } else{
                $gula = "Tidak Normal"; 
            }
        }

        return view('Praktikum9/hasil',
            ['nama'=>$nama, 'tgl'=>$tgl, 'lahir'=>$lahir, 'jk'=>$jk, 'td'=>$drh, 'asam'=>$au,
            'kl'=>$koles,  'gd'=>$gula, 'data'=>$data]);
    }
}


