@extends('app')

@section('content')
  <h3 style="color:red;">{{$article->title}}</h3>
  <article>
    <div class="body">
      <i style="color:grey;">{{$article->body}}</i>
    </div>
  </article>
@stop
