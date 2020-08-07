<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pertanyaanModel;

class PertanyaanController extends Controller{

    public function index()
    {   
        $all_item = PertanyaanModel::get_all();
        return view('adminlte/pertanyaan/index',compact('all_item'));
    }

    public function create()
    {
        return view('adminlte/pertanyaan/create');
    }

    public function store(Request $request)
    {   
        $array_baru = array(
            'judul' => $request['judul'], 
            'isi' => $request['isi'],
            'created_at' => $request['created_at'],

        );
        $new_item = PertanyaanModel::save($array_baru);
        return redirect('adminlte/pertanyaan');
    }
}