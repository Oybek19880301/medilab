<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
//  About ni uzatib berish
    public function index()
    {
        $about = About::all();
        return view('about.index')->with(['abouts' => $about]);
    }

//  Yangi about qo'shadigan sahifaga yunaltish
    public function create()
    {
        return view('about.addabout');
    } 
    
// Yangi about  qo'shish
    public function store(Request $request)
    {
        $request->validate([
            'title'  => 'required',
            'text'   => 'required',
            'photo'  => 'required',
        ]);

        $file = $request->file('photo')->store('images');
        $about = new About;
        $about->title = $request->title;
        $about->text  = $request->text;
        $about->photo = $file;
        $about->save();
        return redirect('about');
    }

// Aboutni o'zgartirish sahifasiga yunaltirish
    public function edit(Request $request)
    {
       $request->validate([
           'id'   => 'required',
       ]);

       $about = About::find($request->id);
       return view('about.editabout')->with(['about' => $about]);
    }    

// Aboutni o'zgartirish 
    public function update(Request $request)
    {

        $request->validate([
            'id'      => 'required',
            'title'   => 'required',
            'text'    => 'required',
        ]);

        $about = About::find($request->id);

        if($request->hasFile('photo')){
            $file = $request->file('photo')->store('images');
            $about->photo   = $file;
          } 

        $about->title  = $request->title;
        $about->text   = $request->text;
        $about->save();
        return redirect('about');
    }    
    
// Aboutni o'chirish 
   public function destroy(Request $request)
   {
       $request->validate([
           'id'  => 'required',
       ]);

       $about = About::find($request->id);
       $about->delete();
       return redirect('about');
   }
}
