<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class SearchController extends Controller
{

    public function autoComplete(Request $request)

    {
    $data =Course::select('course_title')->where("course_title","LIKE"."%{$request->input('query')}%")->get();
    return response()->json($data);
    }

}
