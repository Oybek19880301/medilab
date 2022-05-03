<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
class DoctorController extends Controller
{

// Doctor ni admin panelga uzatish    
    public function index()
    {
        $doctor = Doctor::all();
        return view('doctor.index')->with(['doctors' => $doctor]);
    }

// Doctor qo'shish sahifasiga yunaltirish
    public function create()
    {
        return view('doctor.adddoctor');
    }
    
// Doctor qo'shish
   public function store(Request $request)
   {
       $request->validate([
           'name'         => 'required',
           'surname'      => 'required',
           'direction'    => 'required',
           'description'  => 'required',
           'photo'        => 'required',
           'telegram'     => 'required',
           'fasebook'     => 'required',
           'instagram'    => 'required',
       ]);

       $file = $request->file('photo')->store('images');
       $doctor = new Doctor;
       $doctor->name        =  $request->name;
       $doctor->surname     =  $request->surname;
       $doctor->direction   =  $request->direction;
       $doctor->description =  $request->description;
       $doctor->photo       =  $file;
       $doctor->telegram    =  $request->telegram;
       $doctor->fasebook    =  $request->fasebook;
       $doctor->instagram   =  $request->instagram;
       $doctor->save();

       return redirect('doctor');
    }    

//  Doctor ni tahrirlash sahifasiga yo'naltirish
    public  function  edit(Request $request)
    {
        $request->validate([
            'id'   => 'required',
        ]);

        $doctor = Doctor::find($request->id);
        return view('doctor.editdoctor')->with(['doctor' => $doctor]);
    }

//  Doctor ni tahrirlash
    public function  update(Request $request)
    {
        $request->validate([
            'id'          => 'required',
            'name'        => 'required',
            'surname'     => 'required',
            'direction'   => 'required',
            'description' => 'required',
            'telegram'    => 'required',
            'fasebook'    => 'required',
            'instagram'   => 'required',
        ]);

        $doctor = Doctor::find($request->id);
        if($request->hasFile('photo')){
            $file = $request->file('photo')->store('images');
            $doctor->photo   = $file;
          }
        $doctor->name        = $request->name;
        $doctor->surname     = $request->surname;
        $doctor->direction   = $request->direction;
        $doctor->description = $request->description;
        $doctor->telegram    = $request->telegram;
        $doctor->fasebook    = $request->fasebook;
        $doctor->instagram   = $request->instagram;
        $doctor->save();
        
        return redirect('doctor');
    }   
    
// Doctor ni o'chirish 
    public function destroy(Request $request)
    {
        $request->validate([
            'id'   => 'required',
        ]);
        $doctor = Doctor::find($request->id);
        $doctor->delete();

        return redirect('doctor');
    }
}
