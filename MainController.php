<?php

namespace App\Http\Controllers;

use App\Jobs\SomeJob;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main(Request $request)
    {
        $data = $request->all();
        $a = 1;
        $b = 2;
        $c = $a+$b;
        $vars = compact('a', 'b', 'c', 'data');
        SomeJob::dispatch($vars);
        dump('Job sent');
    }
}
