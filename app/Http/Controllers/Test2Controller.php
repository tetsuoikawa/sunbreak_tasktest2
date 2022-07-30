<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Test;

use Illuminate\Support\Facades\DB;

class Test2Controller extends Controller
{
    public function udemy(){
        
        $tests = DB::table('tests')->get();
    
        dd($tests);

    }
}
