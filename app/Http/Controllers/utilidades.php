<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class utilidades extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    //
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    //
  }

  /*
  *Crear un método llamado división que realice la división entera entre dos
  números public int division(int dividendo, int divisor)
  */
  public function divisionEntera($divisor, $dividendo)
  {
    $result = $dividendo/$divisor;
  }

  /*
  *Crear un método llamado extraerNumero que dada una cadena de texto nos
  devuelva el primer número que encuentre en ella.
  public int extraerNumero(string cadena)
  */
  public function extraerNumero($dato)
  {
    for ($i=0; $i < $dato.length-1; $i++) {
      if (is_numeric($i)) {
        return $i;
      }else {
        return "No se encontro ningun numero!!";
      }
    }
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    //
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    //
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id)
  {
    //
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    //
  }
}
