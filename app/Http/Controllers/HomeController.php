<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
  function index()
  {
    //selection all rows
    $result=DB::table('brands')->get();
    return $result;
  }
}
