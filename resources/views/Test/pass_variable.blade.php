@extends('app')

@section('content')

<h1>Passaggio Variabile</h1>
<p><b>* Con PHP echo() : </b></p>
<p><?= $name ?></p>

<p><b>* Senza PHP, senza Escape : </b></p>
<p>{{ $name }}</p>

<p><b>* Senza PHP, con escape :</b></p>
<p>{!! $name !!}</p>
@stop

@section('footer')
  <script>
    alert('Script inseriti!!!');
  </script>
@stop
