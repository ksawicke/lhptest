<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function showslug($slug)
    {
        $page = "page." . $slug;

        if(view()->exists($page)){
            return view($page)->render();
        }

        die("WHERE ARE YOU???????");
    }
}
