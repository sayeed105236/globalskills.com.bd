<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminBlog;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;


class AdminBlogController extends Controller
{
    public function index()
    {
      $blogs= AdminBlog::all();
      $blog= AdminBlog::paginate(9);
      return view('backend.pages.blogs.manage',compact('blogs','blog'));


    }
    public function addBlog(Request $request)
    {



        $blogs_title = $request->blogs_title;
        $short_description = $request->short_description;


        $blogs_details=$request->blogs_details;
        $blogs_image =$request->file('file');
        $filename=null;
        if ($blogs_image) {
            $filename = time() . $blogs_image->getClientOriginalName();

            Storage::disk('public')->putFileAs(
                'blogs/',
                $blogs_image,
                $filename
            );
          }



        $blog = new AdminBlog();
        $blog->blogs_title = $blogs_title;
        $blog->short_description =$short_description;

        $blog->blogs_details=$blogs_details;
        $blog->blogs_image= $filename;


        $blog->save();

      return back()->with('blog_added','Blog has been added successfully!');
    }


    public function editBlog(Request $request)
    {
      $blogs_title = $request->blogs_title;
      $short_description= $request->short_description;

      $blogs_details=$request->blogs_details;

      $blogs_image =$request->file('file');
      $filename=null;
      if ($blogs_image) {
          $filename = time() . $blogs_image->getClientOriginalName();

          Storage::disk('public')->putFileAs(
              'blogs/updated/',
              $blogs_image,
              $filename
          );


      }

      $blog = AdminBlog::find($request->id);
      $blog->blogs_title = $blogs_title;
      $blog->short_description= $short_description;

      $blog->blogs_details= $blogs_details;

      $blog->blogs_image= $filename;

      $blog->save();
      return back()->with('blog_updated','Blog has been updated successfully!');

}

    public function deleteBlog($id){

      $blog = AdminBlog::find($id);

      $blog->delete();

    return back()->with('blog_deleted','Blog has been deleted successfully!');
}
    public function BlogDetails($id)
    {

      $blogs=AdminBlog::find($id);
      return view('backend.pages.blogs.blogs_details',compact('blogs'));
    }
    public function BlogSubTitle($id)
    {

      $blogs=AdminBlog::find($id);
      return view('backend.pages.blogs.blogs_subtitle_info',compact('blogs'));
    }
    public function BlogMedia($id)
    {

      $blogs=AdminBlog::find($id);
      return view('backend.pages.blogs.media',compact('blogs'));
    }
    public function LearningOutcomes($id)
    {

      $blogs=AdminBlog::find($id);
      return view('backend.pages.blogs.learning_outcomes',compact('blogs'));
    }
    public function Benifits($id)
    {

      $blogs=AdminBlog::find($id);
      return view('backend.pages.blogs.benifit',compact('blogs'));
    }
    public function Need($id)
    {

      $blogs=AdminBlog::find($id);
      return view('backend.pages.blogs.need',compact('blogs'));
    }

}
