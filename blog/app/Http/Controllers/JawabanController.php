<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jawabanModel;


class JawabanController extends Controller
{
    public function index($id)
    {
        $items = JawabanModel::indexById($id);
        return view('adminlte/jawaban/index',compact('items'));
    }

    public function store(Request $request,$id)
    {   
        $array_baru = array(
            'pertanyaan_id' => $id, 
            'isi' => $request['isi'],
        );
        $new_item = JawabanModel::save($array_baru);
        return redirect('adminlte/jawaban/index'.$id);
    }
}