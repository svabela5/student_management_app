<?php

namespace App\Http\Controllers;

use App\Models\College;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    public function index(){
        $colleges = College::all();
        return view('colleges.index', compact('colleges'));
    }
    public function create(){
        $college = new College();

        return view('colleges.create', compact('college'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|unique:colleges',
            'address' => 'required'
        ]);

        College::create($request->all());
        return redirect()->route('colleges.index')->with('message', 'College has been added successfully');
    }

    public function edit($id){
        $college = College::find(id: $id);
        
        return view('colleges.edit', compact('college'));
    }

    public function update($id, Request $request){
        $college = College::find(id: $id);

        $request->validate([
            'name' => 'required',//|unique:colleges',
            'address' => 'required'
        ]);

        $college->update($request->all());
        return redirect()->route('colleges.index')->with('message', 'College has been added successfully');
    }
}
