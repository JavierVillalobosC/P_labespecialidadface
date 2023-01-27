<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computadores;
use App\Models\Estados;

class ComputadoresController extends Controller
{

    public function index()
    {
        $computadores = Computadores::all();
        $estados = Estados::all();
        return view('computadores', compact('computadores', 'estados'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $computador = new Computadoreses($request ->input());
        $computador->saveOrFail();
        return redirect('computadores');
    }


    public function show($id)
    {
        $computador = Computadores::find($id);
        $estados = Estados::all();
        return view('editComputador', compact('computador', 'estados'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $computador = Computadores::find($id);
        $computador->fill($request->input())->saveOrFail();
        return redirect('computadores');
    }


    public function destroy($id)
    {
        $computador = Computadores::find($id);
        $computador->delete();
        return redirect('computadores');
    }
}