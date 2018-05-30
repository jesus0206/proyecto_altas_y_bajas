<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;

class PersonasController extends Controller
{
    public function index()
    {
        $personas=Persona::all();
        return view('Personas.index',compact('personas'));
    }
    public function create()
    {
        return view('Personas.create');
    }
    public function store(Request $request)
    {
        Persona::create($request->all());
        return redirect()->route('Personas.index');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        Persona::findOrFail($id)->delete();
        return redirect()->route('Personas.index');
    }
}
