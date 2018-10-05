<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\manufacture;
use Session;
use Carbon\Carbon;

class manufatureController extends Controller
{
      public function __construct(){
   	   $this->middleware('auth');
   }

   public function index(){
     $all_menuf =manufacture::get();
      return view('backend.brand.allmanufacture',compact('all_menuf'));
   }
   public function addmanufacture(){
   	return view('backend/brand.addmanufactuer');
   }
   public function insertmanufacture(Request $request){
   	     $this->validate($request,[
        'menufr_name' => 'required',
         'menufr_des' => 'max:100',
         'menufr_status' => 'required',
          ],[
            'cat_name.required' => 'Enter your Brand Name',
            'cat_status.required' => 'Enter your Publish Status',
          ]);
      $insert=manufacture::insert([
         'menufr_name' => $_POST['menufr_name'],
         'menufr_des' => $_POST['menufr_des'],
         'menufr_status' => $_POST['menufr_status'],
         'Created_at' => Carbon::now()->toDateTimeString(),
      ]);

      if($insert){
        Session::flash('status','value');
          return redirect('addmanufacture');
      }else{
        Session::flash('error','value');
          return redirect('addmanufacture');
      }
   }


   public function editmanufature($id){
    $edit=manufacture::where('menufr_id',$id)->firstOrFail();
    return view ('backend.brand.editmanufacture',compact('edit'));
   }

   public function updatemanuaceture(Request $request,$id){
   	     $this->validate($request,[
        'menufr_name' => 'required',
         'menufr_des' => 'max:100',
         'menufr_status' => 'required',
          ],[
            'menufr_name.required' => 'Enter your Brand Name',
            'menufr_status.required' => 'Enter your Publish Status',
          ]);
      $update=manufacture::where('menufr_id',$id)->update([
         'menufr_name' => $_POST['menufr_name'],
         'menufr_des' => $_POST['menufr_des'],
         'menufr_status' => $_POST['menufr_status'],
         'Created_at' => Carbon::now()->toDateTimeString(),
      ]);

      if($update){
        Session::flash('status','value');
          return redirect('allmanufacture');
      }else{
        Session::flash('error','value');
          return redirect('allmanufacture');
      }
   }

    public function deletemanufacture($id){
      $delete_menu=manufacture::where('menufr_id',$id)->delete();
      if($delete_menu){
        return redirect(route('allmanufacture'))->with('brand','Brand Deleted Sucessfuly');
      }
  }

}
