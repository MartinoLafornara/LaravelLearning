<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    public function index(){
      $articles = Article::all();
      return view('articles.index', compact('articles'));
    }

    public function show($id){
      // 1° Esempio
      //   $article = Article::find($id);
      //
      //   if (is_null($article)) {
      //     abort(404); // Fermo l'esecuzione generando l'errore 404 (Page not Found)
      //   }
      //   // dd($article); visualizza la variabile


      //2° Esempio
      $article = Article::findOrFail($id);


      return view('articles.show', compact('article'));
    }
}
