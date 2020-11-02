<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function page1()
    {
      //return view('page1');
      return view('tickets.create');
    }

    public function page2()
    {
      return view('page2');
    }

    public function page3()
    {
      return view('page3');
    }

    public function page4()
    {
      return view('page4');
    }
}
