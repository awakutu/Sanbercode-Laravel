<?php

namespace App\Http\Controllers;

class AdminLteController extends Controller{

    public function master()
    {
        return view('adminlte/master');
    }

    public function items_index()
    {
        return view('items/index');
    }

    public function items_create()
    {
        return view('items/create');
    }

    public function index()
    {
        return view('items/index');
    }

    public function data_tables()
    {
        return view('adminlte/partials/data-tables');
    }
}
?>
