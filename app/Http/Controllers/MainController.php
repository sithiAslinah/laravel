<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function dashboard()
   {
   	return view('admin.layout');
   }
    public function out()
    {
        return redirect('adminsite');
    }

     public function userboard()
   {
   	return view('user.layout');
   }
}
