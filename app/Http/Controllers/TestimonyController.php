<?php

namespace App\Http\Controllers;

use App\Models\Testimony;
use Illuminate\Http\Request;
use DB;

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

    public function inspired() {
        $testimonies = DB::table('testimonies')->orderBy('created_at', 'desc')->get();
        return View('inspired',compact('testimonies'));
    }

}
