<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DataController extends Controller
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
    public function hello()
    {
        return "hello!";
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        return $name;

        //
    }

    //
}
