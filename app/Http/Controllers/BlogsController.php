<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminBlog;
use App\Models\BlogDetail;

class BlogsController extends Controller
{
  public function index()
  {

    return view('frontend.pages.blogs');

  }
  public function blogs_details()
  {

    return view('frontend.pages.blogs_details');

  }

  public function blogs_details_index($id)
  {
    $blog_details=BlogDetail::where('admin_blog_id',$id)->first();
    $blogs= AdminBlog::find($id);
    $lts_blogs =AdminBlog::find($id)->latest()->limit(3)->get();
    return view('frontend.users.blog_details',compact('blogs','lts_blogs','blog_details'));
  }

}
