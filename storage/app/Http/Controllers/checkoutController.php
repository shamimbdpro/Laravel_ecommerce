<?php

namespace App\Http\Controllers;
use App\customerRegister;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Request;

class checkoutController extends Controller
{
   public function checkout(){
  	
    if (Session::get('shipingId')){ 

           return redirect('Payment');
     }else{

       return view('frontend.checkout');
      }
  }

  public function customerRegister(Request $request){
  	     $this->validate($request,[
        'customerName' => 'required',
         'customerEmail' => 'required',
          'customerPass' => 'required',
          ],[
            'customerName.required' => 'Enter your name',
            'customerEmail.required' => 'Enter your Email',
            'customerPass.required' => 'Enter your Password',
          ]);
      $insert=customerRegister::insertGetId([
         'customerName' => $_POST['customerName'],
         'customerEmail' => $_POST['customerEmail'],
         'customerPass' => $_POST['customerPass'],
         'Created_at' => Carbon::now()->toDateTimeString(),
      ]);
     
      if($insert){
        Session::flash('status','value');
        Session::put('customerId',$insert);
        Session::put('customerName',$_POST['customerName']);
          return redirect('checkout');
      }else{
        Session::flash('error','value');
          return redirect('checkout');
      }
  }


  public function checklogin(){
  	if (Session::get('customerId')){ 
           return redirect('checkout');
  		}else{
         return view('frontend.login');
  		}
  }

  public function customerLogin(Request $request){
  	  $this->validate($request,[
        'customerEmail' => 'required',
        'customerPass' => 'required',
          ],[
            'customerEmail.required' => 'Enter your Email',
            'customerPass.required' => 'Enter your Password',
          ]);
      
         $customerEmail= $_POST['customerEmail'];
         $customerPass = $_POST['customerPass'];

        $customerInfo =customerRegister::where('customerEmail',$customerEmail)->where('customerPass',$customerPass)->first();

   

        if($customerInfo){
           Session::put('customerId', $customerInfo->customerId);
           Session::put('customerName',$customerInfo->customerName);
          return redirect('checkout');
        }else{

        	return redirect('checklogin');
        }


  }

  public function customerLogout(){
	Session::flush('customerId');
    return redirect('/');
  }


}
