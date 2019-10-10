<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Category,Post};
class FrontendController extends Controller
{
   function getHome()
   {
      $data['featuredPosts']=Post::where('featured',1)->orderBy('id','DESC')->paginate(24);
      return view('frontend.index',$data);
   }
   function getCate($strLink)
   {
      $data['featuredPosts']=Post::where('featured',1)->orderBy('id','DESC')->paginate(24);
      return view('frontend.category',$data);
   }
   function getPrd($strLink)
   {
      $data['prd']=Post::where('title',$strLink)->first();
      return view('frontend.result',$data);
   }
   function getInfo()
   {
       
   }
   function getContact()
   {
       
   }
}
