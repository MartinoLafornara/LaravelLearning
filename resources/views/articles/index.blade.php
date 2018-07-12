@extends('app')

@section('content')
  <h3>Articoli</h3>

  <hr>

  @foreach ($articles as $article)
    <h4 style="color:red;">
      <!-- Chiamata Metodo con passaggio variabile - 1° Esempio -->
      <p>Link Base - <a href="/articles/{{$article->id}}">{{$article->title}}</a></p>
      <!-- Chiamata Metodo con passaggio variabile - 2° Esempio (prende dinamicamente la route) -->
      <p>Link con action() - <a href="{{action('ArticlesController@show', [$article->id])}}">{{$article->title}}</a></p>
      <!-- Chiamata Metodo con passaggio variabile - 3° Esempio -->
      <p>Link con url() -<a href="{{ url('/articles',$article->id)}}">{{$article->title}}</a></p>
    </h4>
    <article>
      <div class="body">
        <i style="color:grey;">{{$article->body}}</i>
      </div>
    </article>
  @endforeach
  <hr>

@stop
