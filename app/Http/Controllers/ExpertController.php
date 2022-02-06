<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expert;
use Illuminate\Support\Facades\Storage;

class ExpertController extends Controller
{
    public function Manage()
    {
      $experts= Expert::all();
      return view('backend.pages.experts.manage',compact('experts'));
    }
    public function StoreExpert(Request $request)
    {
      $expert_name = $request->expert_name;
      $designation = $request->designation;

      $Quotes=$request->Quotes;
      $intro_link=$request->intro_link;


      $expert_image =$request->file('file');
      $filename=null;
      if ($expert_image) {
          $filename = time() . $expert_image->getClientOriginalName();

          Storage::disk('public')->putFileAs(
              'experts/',
              $expert_image,
              $filename
          );


      }

      $expert = new Expert();
      $expert->expert_name = $expert_name;
      $expert->designation =$designation;

      $expert->Quotes=$Quotes;
      $expert->intro_link=$intro_link;


      $expert->expert_image= $filename;


      $expert->save();
      $notification=array(
          'message'=>'Expert record has been added successfully!!!',
          'alert-type'=>'success'
      );
      return Redirect()->back()->with($notification);


    }
    public function updateExpert(Request $request)
    {
      $expert_name = $request->expert_name;
      $designation = $request->designation;

      $Quotes=$request->Quotes;
      $intro_link=$request->intro_link;


      $expert_image =$request->file('file');
      $filename=null;
      $uploadedFile = $request->file('image');
      $oldfilename = $expert['expert_image'] ?? 'demo.jpg';

      $oldfileexists = Storage::disk('public')->exists('experts/' . $oldfilename);

      if ($uploadedFile !== null) {

          if ($oldfileexists && $oldfilename != $uploadedFile) {
              //Delete old file
              Storage::disk('public')->delete('experts/' . $oldfilename);
          }
          $filename_modified = str_replace(' ', '_', $uploadedFile->getClientOriginalName());
          $filename = time() . '_' . $filename_modified;

          Storage::disk('public')->putFileAs(
              'experts/',
              $uploadedFile,
              $filename
          );

          $data['image'] = $filename;
      } elseif (empty($oldfileexists)) {
          throw new GeneralException('Classroom Course image not found!');
          //return redirect()->back()->with(['flash_danger' => 'User image not found!']);
          //file check in storage

      }

      $expert = Expert::find($request->id);

      $expert->expert_name = $expert_name;
      $expert->designation =$designation;
      $expert->intro_link=$intro_link;

      $expert->Quotes=$Quotes;
      $expert->expert_image= $filename;
      $expert->save();
      $notification=array(
          'message'=>'Expert record has been updated successfully!!!',
          'alert-type'=>'success'
      );
      return Redirect()->back()->with($notification);

    }
    public function deleteExpert($id)
    {
      $expert = Expert::find($id);

      $expert->delete();
      $notification=array(
          'message'=>'Expert record has been deleted successfully!!!',
          'alert-type'=>'error'
      );
      return Redirect()->back()->with($notification);


    }
}
