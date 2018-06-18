<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
  public function pass_variable()
  {
    // Metodo #1
    $name = '<i>Martino <span style="color:red;">Lafornara</span></i>';
    return view('test.pass_variable')->with('name', $name);

  }

  public function pass_array()
  {
    // Metodo #1
    // return view('test.pass_array')->with(array(
    //   'first' => 'Martino',
    //   'last' => 'Lafornara',
    // ));

    // Metodo #2
    // $data = array('first' => 'Michele', 'last' => 'Fragnelli');
    // return view('test.pass_array', $data);

    // Metodo #3
    // $first = 'Francesco';
    // $last = 'Platone';
    //
    //
    // return view('test.pass_array', compact('first', 'last'));

    //Metodo #4
    $people = array(
      'Martino Locomotiva',
      'Stefano Lisi',
      'Giuseppe Uboss',
    );
    // $people = [];

    return view('test.pass_array', compact('people'));

  }

}
