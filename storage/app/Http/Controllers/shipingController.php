<?php

namespace App\Http\Controllers;
use App\shiping;
use Carbon\Carbon;
use Session;
use Illuminate\Http\Request;

class shipingController extends Controller
{
     public function shiping(Request $request){

   	     $this->validate($request,[
        'shiping_name' => 'required',
        'shiping_email' => 'required',
        'shiping_phone' => 'required',
        'shiping_address2' => 'required',
          ],[
            'shiping_name.required' => 'Enter your Name',
            'shiping_email.required' => 'Enter your Email',
            'shiping_phone.required' => 'Enter your Phone',
            'shiping_address2.required' => 'Enter your Address',
          ]);
      $shiping=shiping::insertGetId([
         'shiping_name' => $_POST['shiping_name'],
         'shiping_email' => $_POST['shiping_email'],
         'shiping_phone' => $_POST['shiping_phone'],
         'shiping_address1' => $_POST['shiping_address1'],
         'shiping_address2' => $_POST['shiping_address2'],
         'shiping_post' => $_POST['shiping_post'],
         'shiping_country' => $_POST['shiping_country'],
         'shiping_city' => $_POST['shiping_city'],
         'Created_at' => Carbon::now()->toDateTimeString(),
      ]);

      if($shiping){
        Session::flash('status','value');
        Session::put('shipingId',$shiping);
          return redirect('Payment');
      }else{
        Session::flash('error','value');
          return redirect('shiping');
      }
   }
}
