<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use Session;
use Carbon\Carbon;

class categoryController extends Controller
{
   public function __construct(){
   	   $this->middleware('auth');
   }

   public function index(){
     $all_cat =category::get();
      return view('backend.category.allcategory',compact('all_cat'));
   }
   public function addCategory(){
   	return view('backend/category.addCategory');
   }
   public function insertCategory(Request $request){
   	     $this->validate($request,[
        'cat_name' => 'required',
         'cat_des' => 'max:100',
         'cat_status' => 'required',
          ],[
            'cat_name.required' => 'Enter your Cetegory Name',
            'cat_status.required' => 'Enter your Publish Status',
          ]);
      $insert=category::insert([
         'cat_name' => $_POST['cat_name'],
         'cat_des' => $_POST['cat_des'],
         'cat_status' => $_POST['cat_status'],
         'Created_at' => Carbon::now()->toDateTimeString(),
      ]);

      if($insert){
        Session::flash('status','value');
          return redirect('addCategory');
      }else{
        Session::flash('error','value');
          return redirect('addCategory');
      }
   }


   public function editCategory($id){
   $edit=category::where('cat_id',$id)->firstOrFail();
    return view ('backend.category.editcategory',compact('edit'));
   }

   public function updateCategory(Request $request,$id){
   	     $this->validate($request,[
        'cat_name' => 'required',
         'cat_des' => 'max:100',
         'cat_status' => 'required',
          ],[
            'cat_name.required' => 'Enter your Cetegory Name',
            'cat_status.required' => 'Enter your Publish Status',
          ]);
      $update=category::where('cat_id',$id)->update([
         'cat_name' => $_POST['cat_name'],
         'cat_des' => $_POST['cat_des'],
         'cat_status' => $_POST['cat_status'],
         'Created_at' => Carbon::now()->toDateTimeString(),
      ]);

      if($update){
        Session::flash('status','value');
          return redirect('allcetagory');
      }else{
        Session::flash('error','value');
          return redirect('allcetagory');
      }
   }

    public function deleteCategory($id){
      $delete_cat=category::where('cat_id',$id)->delete();
      if($delete_cat){
        return redirect(route('allcetagory'))->with('delete_cat','Data Deleted Sucessfuly');
      }
  }


}
