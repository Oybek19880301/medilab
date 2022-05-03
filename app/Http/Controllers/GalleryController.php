<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
//  Gallerye ni admin panelga uzatish
    public function index()
    {
        $gallery = Gallery::all();
        return view('galleries.index')->with(['galleries' => $gallery]);
    }   
    
// Yangi rasm qo'shish sahifasiga yo'naltirish
    public function create()
    {
        return view('galleries.addgallery');
    }   
    
//   Yangi rasm qo'shish
     public function store(Request $request)
     {
       $request->validate([
           'photo'  => 'required',
       ]);  
       $file = $request->file('photo')->store('images');
       $gallery = new Gallery;
       $gallery->photo = $file;
       $gallery->save();

       return redirect('gallery');
     } 
     

//   Rasmni o'zgartirish sahifasiga yo'naltirish
     public function edit(Request $request)
     {
         $request->validate([
             'id'    => 'required',
         ]);

         $gallery = Gallery::find($request->id);
         return view('galleries.editgallery')->with(['gallery' => $gallery]);
     }    

//  Rasmni o'zgartirish
    public function update(Request $request)
    {
        $request->validate([
            'id'      => 'required',
        ]);

        $gallery = Gallery::find($request->id);
        if($request->hasFile('photo')){
            $file = $request->file('photo')->store('images');
            $gallery->photo   = $file;
        }        
        $gallery->save();

        return redirect('gallery');

    }     
}
