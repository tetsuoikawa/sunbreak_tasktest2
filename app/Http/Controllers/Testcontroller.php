<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Test;

//Facades・・・クラスの中のクラス。
//予め用意されているFacadesを使って、システムを起動する。
use Illuminate\Support\Facades\DB;

class Testcontroller extends Controller
{
public function index(){

$values = Test::all();

$uooo1 = 'oooooooo';



$tests = DB::table('migrations')->select('migration')->get();



return view('tests.test', compact('values'));
}

public function test2(){

    $a132 = DB::table('migrations')->select('migration')->get();

    return view('tests.test132', compact('a132'));
}

public function uooo12(){
    $values = Test::all();

     $uooo1 = 'oooooooo';
     
    return view('uooo', compact('values', 'uooo1'));
}
}
