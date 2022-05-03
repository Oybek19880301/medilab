<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonials;
class TestimonialsController extends Controller
{
// Mijozlar fikrini admin panelga uzatish
    public function index()
    {
       $testimonials = Testimonials::all();
       return view('testimonials.index')->with(['testimonials' => $testimonials]);
    }   
    
// Yangi mijoz qo'shosh sahifasiga yo'naltirish
    public function create()
    {
        return view('testimonials.addtestimonials');
    }  
    
//  Yangi mijoz qo'shish
    public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required',
            'surname'    => 'required',
            'profession' => 'required',
            'text'       => 'required',
            'photo'      => 'required',
        ]);

        $file = $request->file('photo')->store('images');
        $testimonials = new Testimonials;
        $testimonials->name        = $request->name;
        $testimonials->surname     = $request->surname;
        $testimonials->profession  = $request->profession;
        $testimonials->text        = $request->text;
        $testimonials->photo       = $file;
        $testimonials->save();

        return redirect('testimonial');

    }    
    
// Mijozni tahrirlash sahifasiga yunaltirish
    public function edit(Request $request)
    {
       $request->validate([
           'id'   => 'required',
       ]);

       $testimonials = Testimonials::find($request->id);
       return view('testimonials.edittestimonial')->with(['testimonials' => $testimonials]);
    }    

//  Mijozlar ni tahrirlash
    public function  update(Request $request)
    {
       $request->validate([
           'id'         => 'required',
           'name'       => 'required',
           'surname'    => 'required',
           'profession' => 'required',
           'text'       => 'required',
       ]);

       $testimonials = Testimonials::find($request->id);
       if($request->hasFile('photo')){
        $file = $request->file('photo')->store('images');
        $testimonials->photo   = $file;
       }
       $testimonials->name        =  $request->name;
       $testimonials->surname     =  $request->surname;
       $testimonials->profession  =  $request->profession;
       $testimonials->text        =  $request->text;
       $testimonials->save();

       return redirect('testimonial');

    }   

//  Mijozlarni o'chirish
    public function destroy(Request $request)
    {
        $request->validate([
            'id'   => 'required',
        ]);

        $testimonials = Testimonials::find($request->id);
        $testimonials->delete();

        return redirect('testimonial');
    }    
}
