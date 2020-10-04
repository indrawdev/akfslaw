<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partner;

class PartnerController extends Controller
{

    public function index()
    {
    
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $partner = new Partner();
        $partner->en_name = $request->en_name;
        $partner->slug = $request->en_name;
        $partner->en_description = $request->en_description;
        $partner->id_name = $request->id_name;
        $partner->id_description = $request->id_description;


    }

    public function show($slug)
    {
        $partner = Partner::where('slug', '=', $slug)->firstOrFail();
        return view('pages.partner', ['partner' => $partner]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $partner = Partner::findOrFail($id);
        $partner->en_name = $request->en_name;
        $partner->slug = $request->en_name;
        $partner->en_description = $request->en_description;
        $partner->id_name = $request->id_name;
        $partner->id_description = $request->id_description;
    }

    public function destroy($id)
    {
        //
    }
}
