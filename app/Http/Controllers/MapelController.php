<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index(){
        return view('adminpanel.mapel.view_mapel');
    }
}
