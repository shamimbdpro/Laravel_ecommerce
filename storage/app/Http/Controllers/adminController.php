<?php

namespace App\Http\Controllers;
use App\tbl_order;
use App\product;
use App\category;
use App\manufacture;
use Illuminate\Http\Request;


class adminController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }
   public function index(){
      	 return view('backend.index');
   }

   

}
