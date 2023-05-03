<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BukuModel;

class BukuController extends Controller
{
    // Get Buku
    public function index(){
        $data_buku = BukuModel::all();
        $no = 0;
        return view('buku.index', compact('data_buku','no'));
    }
    // Create Buku
    public function create(Request $request){
        return view('buku.create');
    }

    // Store Buku
    public function store(Request $request){
        $buku = new BukuModel();
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->harga = $request->harga;
        $buku->tgl_terbit = $request->tgl_terbit;
        $buku->save();
        return redirect()->route('buku.index');
}
public function destroy($id){
    $data =BukuModel::where('id',$id)->delete();
    return redirect('/');
}
//Edit Buku
public function edit($id){
    $buku = BukuModel::find($id);
    return view('buku.edit',['buku'=>$buku]);
}
public function update(Request $request,$id){
    $buku = BukuModel::find($id);
    $buku->judul = $request->judul;
    $buku->penulis = $request->penulis;
    $buku->harga = $request->harga; $buku->tgl_terbit = $request->tgl_terbit;
    $buku->save();
return redirect()->route('buku.index');
}
}