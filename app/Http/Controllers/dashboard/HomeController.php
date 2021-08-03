<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
   public function __construct()
   {
       $this->middleware('auth');
       //$this->middleware(['rol','auth']);
   }

 
   public function index()
   {
       return view('dashboard.index');

   }
}
