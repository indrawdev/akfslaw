<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partner;

class FrontendController extends Controller
{

    public function index()
    {
        $partners = Partner::all();   
        return view('welcome', ['partners' => $partners]);
    }

    public function create()
    {
        //
    }

    public function edit($id)
    {
        //
    }
}
