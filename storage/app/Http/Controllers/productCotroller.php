<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\product;
use App\category;
use App\manufacture;
use Session;
use Carbon\Carbon;

class productCotroller extends Controller
{
    public function index(){
      $products =product::get();   
      return view('backend.product.allproduct',compact('products'));
   }
   public function addProduct(){
   	$catlist =category::where('cat_status',1)->get();
   	$brand_list=manufacture::where('menufr_status',1)->get();
     return view('backend.product.addProduct',compact('catlist','brand_list'));
   }

   public function insertProduct(Request $request){
   	     $this->validate($request,[
        'product_name' => 'required',
        'product_price' => 'required',
        'p_img' => ' required|mimes:jpeg,jpg,png,gif',
          ],[
            'product_name.required' => 'Enter your Product Name',
            'product_price.required' => 'Enter your Product Price',
            'p_img.mimes' => 'image format allow only jpeg,jpg,png,gif',
          ]);

        $insertProduct=product::insertGetId([
         'product_name' => $_POST['product_name'],
         'catagory_id' => $_POST['catagory_id'],
         'menufacture_id' => $_POST['menufacture_id'],
         'pSmall_des' => $_POST['pSmall_des'],
         'plong_des' => $_POST['plong_des'],
         'product_price' => $_POST['product_price'],
         'p_img' => 'empty.jpg',
         'product_size' => $_POST['product_size'],
         'product_color' => $_POST['product_color'],
         'product_status' => $_POST['product_status'],
         'Created_at' => Carbon::now()->toDateTimeString(),

      ]);

     if($request->hasFile('p_img')){
       $image=$request->file('p_img');
       $imageName='Product_'.$insertProduct.'_'.time().'.'.$image->getClientOriginalExtension();
       Image::make($image)->save(base_path('public/contents/uploads/product/'.$imageName));

       product::where('product_id',$insertProduct)->update([
         'p_img' =>$imageName,
       ]);

      if($insertProduct){
        Session::flash('status','value');
          return redirect('addProduct');
      }else{
        Session::flash('error','value');
          return redirect('addProduct');
      }
   }

  }   



   public function editProduct($id){
   	$catlist =category::where('cat_status',1)->get();
   	$brand_list=manufacture::where('menufr_status',1)->get();
    $products=product::where('product_id',$id)->firstOrFail();
    return view ('backend.product.editProduct',compact('products','catlist','brand_list'));
     }


   public function updateProduct(Request $request,$id){
      $image_path=product::where('product_id', $id)->get();
    $this->validate($request,[
        'product_name' => 'required',
        'product_price' => 'required',
        'p_img' => 'mimes:jpeg,jpg,png,gif',
          ],[
            'product_name.required' => 'Enter your Product Name',
            'product_price.required' => 'Enter your Product Price',
            'p_img.mimes' => 'image format allow only jpeg,jpg,png,gif',
          ]);
       if(!empty($_FILES['p_img']['name'])){


      
        $updateProduct=product::where('product_id',$id)->update([
         'product_name' => $_POST['product_name'],
         'catagory_id' => $_POST['catagory_id'],
         'menufacture_id' => $_POST['menufacture_id'],
         'pSmall_des' => $_POST['pSmall_des'],
         'plong_des' => $_POST['plong_des'],
         'product_price' => $_POST['product_price'],
         'p_img' =>$_FILES['p_img']['name'],
         'product_size' => $_POST['product_size'],
         'product_color' => $_POST['product_color'],
         'product_status' => $_POST['product_status'],
         'Created_at' => Carbon::now()->toDateTimeString(),

        ]);
      
	     if($request->hasFile('p_img')){
	       $image=$request->file('p_img');
	       $imageName='Product_'.$updateProduct.'_'.time().'.'.$image->getClientOriginalExtension();
	       $unlik=Image::make($image)->save(base_path('public/contents/uploads/product/'.$imageName));
          
	       product::where('product_id',$id)->update([
	         'p_img' =>$imageName,
	       ]);

         foreach($image_path as $img_real_path){
       unlink(public_path().'/contents/uploads/product/'.$img_real_path->p_img);
 
       }
      }


    }else{
      $updateProduct=product::where('product_id',$id)->update([
         'product_name' => $_POST['product_name'],
         'catagory_id' => $_POST['catagory_id'],
         'menufacture_id' => $_POST['menufacture_id'],
         'pSmall_des' => $_POST['pSmall_des'],
         'plong_des' => $_POST['plong_des'],
         'product_price' => $_POST['product_price'],
         'product_size' => $_POST['product_size'],
         'product_color' => $_POST['product_color'],
         'product_status' => $_POST['product_status'],
         'Created_at' => Carbon::now()->toDateTimeString(),

        ]);

    }



	      if($updateProduct){
	        Session::flash('status','value');
	          return redirect('allProduct');
	      }else{
	        Session::flash('error','value');
	          return redirect('allProduct');
	      }
	 
   }


    public function deleteProduct($id){
    $image_path=product::where('product_id', $id)->get();
     $delete_product=product::where('product_id',$id)->delete();
 
     foreach($image_path as $img_real_path){
       unlink(public_path().'/contents/uploads/product/'.$img_real_path->p_img);
      return redirect(route('allProduct'))->with('delete_product','Data Deleted Sucessfuly');
 
     }  
  }


}
