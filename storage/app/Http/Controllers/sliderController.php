<?php

namespace App\Http\Controllers;
use App\slider;
use Image;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Request;

class sliderController extends Controller
{
    public function index(){
      $sliders =slider::get();   
      return view('backend.slider.allslider',compact('sliders'));
    }

     public function addslider(){
    	return view('backend.slider.addslider');
    }

   public function insertslider(Request $request){
   	     $this->validate($request,[
        'slidertitle' => 'required',
        'slider_img' => ' required|mimes:jpeg,jpg,png,gif',
          ],[
            'slidertitle' => 'title is required',
            'p_img.mimes' => 'image format allow only jpeg,jpg,png,gif',
          ]);

        $insertslider=slider::insertGetId([
         'slider_title' => $_POST['slidertitle'],
         'slider_subtitle' => $_POST['Subtitle'],
         'slider_p' => $_POST['slider_p'],
         'slider_img' => 'empty.jpg',
         'Created_at' => Carbon::now()->toDateTimeString(),

      ]);

     if($request->hasFile('slider_img')){
       $image=$request->file('slider_img');
       $imageName='slider_'.$insertslider.'_'.time().'.'.$image->getClientOriginalExtension();
       Image::make($image)->save(base_path('public/contents/uploads/slider/'.$imageName));

       slider::where('slider_id',$insertslider)->update([
         'slider_img' =>$imageName,
       ]);

      if($insertslider){
        Session::flash('slider','value');
          return redirect('addslider');
      }else{
        Session::flash('error','value');
          return redirect('addslider');
      }
   }

  }   



    public function deleteslider($id){
      $slider_img=slider::where('slider_id', $id)->get();
     $delete_slider=slider::where('slider_id',$id)->delete();
 
     foreach($slider_img as $img_real_path){
       unlink(public_path().'/contents/uploads/slider/'.$img_real_path->slider_img);
      return redirect(route('slider'))->with('deleteslider','Data Deleted Sucessfuly');
 
     }  
  }








}
