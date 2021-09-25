<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminBlog;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use App\Models\BlogDetail;


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


        $blog->blogs_image= $filename;


        $blog->save();

      return back()->with('blog_added','Blog has been added successfully!');
    }


    public function editBlog(Request $request)
    {
      $blogs_title = $request->blogs_title;
      $short_description= $request->short_description;



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
      $blog = BlogDetail::where('admin_blog_id',$id)->get();
      $blogs=AdminBlog::find($id);
      return view('backend.pages.blogs.blogs_details',compact('blogs','blog'));
    }

    public function BlogView($id)
    {

      $blogs=AdminBlog::find($id);
      $blog_details=BlogDetail::where('admin_blog_id',$id)->get();

      return view('backend.pages.blogs.view',compact('blogs','blog_details'));
    }

    public function Store(Request $request)
    {
      $admin_blog_id=$request->admin_blog_id;

      $sub_title=$request->sub_title;
      $sub_title_description=$request->sub_title_description;
      $youtube_url_1=$request->youtube_url_1;
      $blog_details_content=$request->blog_details_content;

      $blog_banner_image =$request->file('file1');
      $blog_content_img1 =$request->file('file2');
      $blog_content_img2 =$request->file('file3');
      $filename1=null;
      $filename2=null;
      $filename3=null;
      if ($blog_banner_image) {
          $filename1 = time() . $blog_banner_image->getClientOriginalName();

          Storage::disk('public')->putFileAs(
              'Blogs Banner/',
              $blog_banner_image,
              $filename1
          );
        }
        if ($blog_content_img1) {
            $filename2 = time() . $blog_content_img1->getClientOriginalName();

            Storage::disk('public')->putFileAs(
                'Blogs Banner/',
                $blog_content_img1,
                $filename2
            );
          }
          if ($blog_content_img2) {
              $filename3 = time() . $blog_content_img2->getClientOriginalName();

              Storage::disk('public')->putFileAs(
                  'Blogs Banner/',
                  $blog_content_img2,
                  $filename3
              );
            }

      $blog_details = new BlogDetail();
      $blog_details->admin_blog_id=$admin_blog_id;
      $blog_details->sub_title=$sub_title;
      $blog_details->sub_title_description=$sub_title_description;
      $blog_details->youtube_url_1=$youtube_url_1;
      $blog_details->blog_details_content=$blog_details_content;


      $blog_details->blog_banner_image= $filename1;
      $blog_details->blog_content_img1= $filename2;
      $blog_details->blog_content_img2= $filename3;

      $blog_details->save();
      return back()->with('blog_added','Blog has been added successfully created!');

    }

}
