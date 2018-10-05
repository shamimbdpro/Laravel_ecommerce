<?php

namespace App\Http\Controllers;
use Image;
use App\product;
use App\slider;
use App\category;
use App\manufacture;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Request;

class websiteController extends Controller
{
  public function index(){
      $sliders =slider::get(); 
  	  $products =product::where('product_status',1)->orderBy('product_id','DESC')->limit(6)->get();
  	  $recomments1 =product::where('product_status',1)->orderBy('product_id','DESC')->limit(3)->get();
  	  $recomments =product::where('product_status',1)->orderBy('product_id','DESC')->get();
      return view('frontend.index',compact('sliders','products','recomments','recomments1'));
  }


    public function product_details($id){
    $single_products =product::where('product_id',$id)->first();
  	return view('frontend.product-details',compact('single_products'));
  }


  public function blog(){
  	return view('frontend.blog');
  }

  public function blog_single(){
  	return view('frontend.blog-single'); 
  }
  
  public function contactus(){
    return view('frontend.contact-us');
  }

  public function shop(){
      $products =product::where('product_status',1)->get();
      return view('frontend.shop',compact('products'));
  }

  public function myaccount(){
  	return view('frontend.myaccount');
  }
}
