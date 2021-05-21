<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\File;

class MemoriesController extends Controller
{
    public function index()
    {

        return view('content/index');
    }
    public function apartado2()
    {

        return view('content/apartado2');
    }
    public function apartado3()
    {

        return view('content/apartado3');
    }
    public function apartado4()
    {

        return view('content/apartado4');
    }
}
