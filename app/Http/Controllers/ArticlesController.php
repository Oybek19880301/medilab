<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;

class ArticlesController extends Controller
{

// Articles ni  uzatib berish     
    public function index()
    {
        $articles = Articles::all();
        return view('articles.index')->with(['articles' => $articles]);
    }


// Yangi articles qo'shish sahifasiga yunaltirsh
    public function create()
    {
        return view('articles.addarticles');
    } 
    
// Yangi Articles qo'shadigan funcsiya

   public function store(Request $request)
   {
        $request->validate([
            'title'  => 'required',
            'text'   => 'required', 
            'photo'  => 'required', 
        ]);
        $file = $request->file('photo')->store('images');
        $articles     = new Articles;
        $articles->title = $request->title;
        $articles->text  = $request->text;
        $articles->photo = $file;
        $articles->save();

        return redirect('articles');
   }  

// Articles ni o'zgartiradigan sahfifag yunaltirish  

   public function edit(Request $request)
   {
      $request->validate([
          'id' => 'required',
      ]);
      
      $articles = Articles::find($request->id);
      return view('articles.editarticles')->with(['articles' => $articles]);
   } 

// Articles ni o'zartiradigan action
   public function update(Request $request)
   {

      $request-> validate([
          'id'     => 'required',
          'title'  => 'required',
          'text'   => 'required',
      ]);
     
      $articles = Articles::find($request->id);
      if($request->hasFile('photo')){
        $file = $request->file('photo')->store('images');
        $articles->photo   = $file;
      } 

      $articles->title  = $request->title;
      $articles->text   = $request->text;
      $articles->save();
    
      return redirect('articles');
   }  
   
// O'chirish 
   
   public function destroy(Request $request)
   {
      $request-> validate([
          'id'  => 'required',
      ]);

      $articles =Articles::find($request->id);
      $articles->delete();
      return redirect('articles');
   }
   
   
}
