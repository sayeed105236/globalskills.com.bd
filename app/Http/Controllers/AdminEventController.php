<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminEvent;
use Illuminate\Support\Facades\Storage;

class AdminEventController extends Controller
{
    public function index()
    {
      $events= AdminEvent::all();
      $event= AdminEvent::paginate(9);
      return view('backend.pages.events.manage',compact('events','event'));
    }
    public function Store(Request $request)
    {



        $event_title = $request->event_title;
        $description = $request->description;


        $month=$request->month;
        $date=$request->date;
        $event_image =$request->file('file');
        $filename=null;
        if ($event_image) {
            $filename = time() . $event_image->getClientOriginalName();

            Storage::disk('public')->putFileAs(
                'events/',
                $event_image,
                $filename
            );
          }



        $event = new AdminEvent();
        $event->event_title = $event_title;
        $event->description =$description;

        $event->date=$date;
        $event->month=$month;
        $event->event_image= $filename;


        $event->save();

      return back()->with('event_added','Event has been added successfully!');
    }



    public function Delete($id){

      $event = AdminEvent::find($id);

      $event->delete();

    return back()->with('event_deleted','Event has been deleted successfully!');
}
}
