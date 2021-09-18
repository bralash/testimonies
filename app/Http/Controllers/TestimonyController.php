<?php

namespace App\Http\Controllers;

use App\Models\Testimony;
use Illuminate\Http\Request;


class TestimonyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }


    public function testify(Request $request) {
        $testimony = new Testimony;
        $testimony->testimony = $request->testimony;
        

        $testimony->save();

        // return View('thanks');
    }

}
