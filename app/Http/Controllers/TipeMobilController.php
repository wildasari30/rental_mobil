<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipeMobil;

class TipeMobilController extends Controller
{
    function index()
    {
        $tipeMobilData = TipeMobil::get();
        return view('pages.tipemobil.index', compact('tipeMobilData'));
    }
    
    function store(Request $request)
    {
        //validasi data yang masuk
        $tipeMobilData = $request->validate([
            'tipe'=> 'required',
        ]);
        //simpan kedalam database
        TipeMobil::create($tipeMobilData);
        //mengalihkan ke halaman awal
        return redirect()->to('/tipemobil');
    }

    function create()
    {
        return view('pages.tipemobil.create');
    }

    function update($id, Request $request)
    {
        //validasi data
        $validasiTipeMobil = $request->validate([
            'tipe'=>'required'
        ]);
        
        //update data
        //$tipeMobilData = TipeMobil::find($id);
        //$tipeMobilData->update($validasiTipeMobil);
        
        TipeMobil::find($id)->update($validasiTipeMobil);
        //redirect
        return redirect()->to('/tipemobil');
    }
    
    function edit($id)
    {
        $tipeMobilData = TipeMobil::find($id);
        return view('pages.tipemobil.edit', compact('tipeMobilData'));
    }

    function delete($id)
    {
        $tipeMobilData = TipeMobil::find($id);
        $tipeMobilData->delete();

        return redirect()->to('/tipemobil');
    }
}