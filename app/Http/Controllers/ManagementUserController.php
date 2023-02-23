<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManagementUserController extends Controller
{
    public function index(){
        $nama = "Krisna Choiril Andika";
        $pelajaran = ["Workshop SI WEB"];
        return view ('home', compact('nama','pelajaran'));
    }
    public function create(){
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk menambah user data";
    }
    public function store(request $request){
        return "Method ini nantinya akan digunakan untuk menciptakan data user yang baru";
    }
    public function show($id){
        return "Method ini nantinya akan digunakan untuk mengambil satu data user dengan id=" .$id;
    }
    public function edit($id){
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk mengubah data edit dengan id=".$id;
    }
    public function update(Request $request, $id){
        return "Method ini nantinya akan digunakan untuk mengubah data user dengan id=".$id;
    }
    public function destroy($id){
        return "Method ini nantinya digunakan untuk menghapus data user dengan id=".$id;
    }
}
