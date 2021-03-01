<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function users()
    {
        $results = app('db')->select("SELECT * FROM users");
        return $results;
    }

    public function usersDB()
    {
        $results = DB::select("SELECT * FROM users");
        return $results;
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        return $name;

        //
    }

    //
}
