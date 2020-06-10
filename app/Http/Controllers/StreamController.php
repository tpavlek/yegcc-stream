<?php

namespace App\Http\Controllers;

use App\Stream;

class StreamController extends Controller
{

    public function yegcc()
    {
        $stream = Stream::yegcc();
        return view('stream')->with('stream', $stream);
    }

    public function epsb()
    {
        $stream = Stream::epsb();
        return view('stream')->with('stream', $stream);
    }

}
