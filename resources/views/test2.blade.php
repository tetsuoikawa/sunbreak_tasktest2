<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Test;

use Illuminate\Support\Facades\DB;


class test2 extends Controller {
    $tests = DB::table('tests')->get();
    
    dd($tests);
}

?>