<?php

namespace Datallio\Http\Controllers;

use Illuminate\Http\Request;

use Datallio\Http\Requests;
use Datallio\Http\Controllers\Controller;

class DatallioController extends Controller
{

    public function index()
    {
        return view('index');
    }
    public  function  contacto()
    {
        return view('contacto');
    }





}
