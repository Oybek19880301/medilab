<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{

// Department ni admen panelga uzatish    
    public function index()
    {
       $department = Department::all();
       return view('department.index')->with(['department' => $department]);
    }

// Yangi department qo'shish sahifasiga yunaltirish
    public function create()
    {
        return view('department.adddepartment');
    }   
    
// Yangi department qo'shish
    public function store(Request $request)
    {
        $request->validate([
            'name'         => 'required',
            'description'  => 'required',
            'text'         => 'required',
            'photo'        => 'required',
        ]);
        $file = $request->file('photo')->store('images');
        $department = new Department;
        $department->name         = $request->name;
        $department->description  = $request->description;
        $department->text         = $request->text;
        $department->photo        = $file;
        $department->save();

        return redirect('department');

    }  
    
//  Departmentni o'zgartirish sahifasiga yunaltirish
    public function edit(Request $request)
    {
        $request->validate([
            'id'  => 'required',
        ]);

        $department = Department::find($request->id);
        return view('department.editdepartment')->with(['department' => $department]);
    }   
    
// Departmentni o'zgartirish
    public function update(Request $request)
    {
        $request -> validate([
            'id'          => 'required',
            'name'        => 'required',
            'description' => 'required',
            'text'        => 'required',
        ]);

        $department = Department::find($request->id);
        if($request->hasFile('photo')){
            $file = $request->file('photo')->store('images');
            $department->photo   = $file;
          } 
        
        $department ->name         = $request->name;
        $department ->description  = $request->description;
        $department ->text         = $request->text;
        $department->save();

        return redirect('department');

    }  
    
// Departmentni o'chirish
    public function destroy(Request $request)
    {
        $request-> validate([
            'id'  => 'required',
        ]);

        $department = Department::find($request->id);
        $department->delete();
        return redirect('department');
    }    
}
