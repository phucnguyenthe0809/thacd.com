<?php

namespace App\Http\Controllers;

use App\Http\Requests\{AddCategoryRequest,EditCategoryRequest,LoginRequest,AddPostRequest};
use Illuminate\Http\Request;
use App\Models\{Category,Post};
use Auth;
use DB;
class BackendController extends Controller
{
    //category
    function getCategory() {
     
        return view('backend.category.category');
    }
    function postCategory(AddCategoryRequest $r) {
        $categories=Category::all()->toArray();
        if(getLevel($categories,$r->idParent,1)<4)
        {
            $cate=new Category;
            $cate->name=$r->name;
            $cate->slug='danh-muc/'.str_slug($r->name);
            $cate->id_parent=$r->idParent;
            $cate->save();
            return redirect()->back()->with('thongbao','Đã thêm thành công!');
        }
        else
        {
            return redirect()->back()->withErrors(['name'=>'Giao diện không hỗ trợ danh mục > 3 cấp']);
        }
       
    }
    function getEditCategory($idCate) {
        $data['category']=Category::find($idCate);
        return view('backend.category.editcategory',$data);
    }
    function postEditCategory(EditCategoryRequest $r,$idCate) {
        $categories=Category::all()->toArray();
        if(getLevel($categories,$r->idParent,1)<4)
        {
        $cate=Category::find($idCate);
        $cate->name=$r->name;
        $cate->slug=$r->slug;
        $cate->id_parent=$r->idParent;
        $cate->save();
        return redirect()->back()->with('thongbao','Đã Sửa thành công!');
        }
        else
        {
            return redirect()->back()->withErrors(['name'=>'Giao diện không hỗ trợ danh mục > 2 cấp'])->withInput();
        }
    }
    function delCategory($idCate)
    {
        $cate=Category::find($idCate);
        Category::where('id_parent',$idCate)->update(['id_parent'=>$cate->id_parent]);

        Category::destroy($idCate);
        return redirect('admin/category')->with('thongbao','Đã xoá thành công!');
    }

   // Login
   function getLogin()
   {
       return view('backend.login');
   }
   function postLogin(LoginRequest $r)
   {
       $username=$r->username;
       $password=$r->password;

     if (Auth::attempt(['username' => $username, 'password' => $password],$r->has('remember'))) {
         return redirect('admin');
     }
     else
     {
         return redirect()->back()->withErrors(['username'=>'Tài khoản hoặc mật khẩu không chính xác!'])->withInput();
     }
      
   }
   function logout()
   {
       Auth::logout();
       return redirect()->back();
   }

   //index
   function getIndex(){
    return view('backend.index');
   }

   //post
   function getListPost(request $r){
    if ($r->has('search')) {
        $data['posts']=Post::where('title','like','%'.$r->search.'%')->orderBy('id','DESC')->paginate(10);
    }
    else
    {
        $data['posts']=Post::orderBy('id','DESC')->paginate(10);

    }
  
    return view('backend.post.list-post',$data);
}

function getAddPost(){
    return view('backend.post.add-post');
}
function postAddPost(AddPostRequest $r){
    $post=new Post;
    $post->title=$r->title;
    $post->slug=str_slug($r->title);
    $post->content=$r->content;

    if($r->hasFile('img'))
    {
    
        $file=$r->img;
   
        $file_name=str_slug($r->title).'.'.$file->getClientOriginalExtension();
  
        $file->move('backend/img/images',$file_name);

        $post->img=$file_name;
    }
    else
    {
        $post->img='no-img.jpg';
    }
    $post->describe=$r->describe;
    $post->featured=$r->has('featured');

    if($r->has('tags'))
    {
        $post->tag= json_encode($r->tags);
    }
    else
    {
        $post->tag='[]';
    }
  
   
    $post->category_id=$r->category_id;
    $post->save();
    return redirect('admin/post')->with('thongbao','Đã Thêm Thành công!');
}
function deletePost(request $r)
{
    
    Post::destroy($r->arrayIdPost);
    return redirect('admin/post')->with('Đã xoá thành công');
}


function getEditPost($idPost){
    $data['post']=Post::find($idPost);
    return view('backend.post.edit-post',$data);
}

function postEditPost(AddPostRequest $r,$idPost){
    $post=Post::find($idPost);
    $post->title=$r->title;
    $post->slug=str_slug($r->title);
    $post->content=$r->content;

    if($r->hasFile('img'))
    {
        if ($post->img!='no-img.jpg') {
            unlink('backend/img/images/'.$post->img);
          }
        $file=$r->img;
   
        $file_name=str_slug($r->title).'.'.$file->getClientOriginalExtension();
  
        $file->move('backend/img/images',$file_name);

        $post->img=$file_name;
    }
 
    $post->describe=$r->describe;
    $post->featured=$r->has('featured');
  
    if($r->has('tags'))
    {
        $post->tag= json_encode($r->tags);
    }
    else
    {
        $post->tag='[]';
    }
    $post->category_id=$r->category_id;
    $post->save();
    return redirect()->back()->with('thongbao','Đã Lưu!');
  
}

}
