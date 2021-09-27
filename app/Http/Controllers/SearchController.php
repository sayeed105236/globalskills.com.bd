<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class SearchController extends Controller
{
    public function search(Request $request)
    {
      return view('frontend.pages.search');
    }
    public function SearchautoComplete(Request $request)

    {
      $query= $request->get('term','');
      $services = Course::where('course_title','LIKE','%'.$query.'%')->('status','0')->get();
      $data= [];
      foreach($services as $service){
        $data[]= [
          'value'=>$service->course_title;
          'id'=>$service->id;
        ];
      }
      if(count($data))
      {
        return $data;
      }else {
        return ['value'=>'No Result Found','id'=>''];
      }

    }

}
