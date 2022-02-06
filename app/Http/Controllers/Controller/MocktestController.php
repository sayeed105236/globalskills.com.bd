<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;
use App\Models\mockTestCategory;
use App\Models\Topic;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MocktestController extends Controller
{


    public function mockCategory()
    {

        $categories = mockTestCategory::all();
        return view('backend.quiz.mockCategory.mockCategory', compact('categories'));
    }

    public function addMock(Request $request)
    {

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(917, 1000)->save('storage/uploads/mocktest/' . $name_gen);
        $save_url = 'storage/uploads/mocktest/' . $name_gen;

        $request->validate([
            'mock_category' => 'required',
            'regular_price' => 'required',
        ], [
            'mock_category.required' => 'Please input mocktest category.',
            'regular_price.required' => 'Please input regular price.',
        ]);
        mockTestCategory::insert([
            'image' => $save_url,
            'mock_category' => $request->mock_category,
            'regular_price' => $request->regular_price,
            'discount_price' => $request->discount_price,
            'description' => $request->description,
            'exam_format' => $request->exam_format,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Mocktest Added Success',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function mockUpdate(Request $request)
    {
        $id = $request->id;

        $request->validate([
            'mock_category' => 'required',
            'regular_price' => 'required',
        ], [
            'mock_category.required' => 'Please input mocktest category.',
            'regular_price.required' => 'Please input regular price.',
        ]);
        $oldImage = $request->old_img;
        unlink($oldImage);

        $image = $request->file('image');
        $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(917,1000)->save('storage/uploads/mocktest/'.$name_gen);
        $save_url = 'storage/uploads/mocktest/'.$name_gen;
        mockTestCategory::findOrFail($id)->update([
            'image' => $save_url,
            'mock_category' => $request->mock_category,
            'regular_price' => $request->regular_price,
            'discount_price' => $request->discount_price,
            'description' => $request->description,
            'exam_format' => $request->exam_format,
            'updated_at' => Carbon::now(),


        ]);
        $notification = array(
            'message' => 'Mock Update Success',
            'alert-type' => 'success'
        );
        return Redirect()->route('mock-category')->with($notification);
    }


    public function viewCategory()
    {

        $categories = mockTestCategory::all();
        return view('backend.quiz.mockCategory.viewMockCategory', compact('categories'));
    }

    public function delete($mock_id)
    {
        $category = mockTestCategory::findOrFail($mock_id);
        unlink($category->image);
        mockTestCategory::findOrFail($mock_id)->delete();

        $notification = array(
            'message' => 'Mock Category Delete Success',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function course_details_frontend($id)
  {

    $mocktest= mockTestCategory::findOrFail($id);
    //dd($mocktest);

    return view('frontend/pages/course_details_index',compact('mocktest'));
  }

  public function quizView($id){
    $topics = Topic::where('course_id',$id)->get();


  // $courses = Course::findOrFail($id);
  return view('frontend.quiz.course.viewTopic',compact('topics'));
}

}
