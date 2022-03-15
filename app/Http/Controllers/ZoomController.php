<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ZoomMeeting;
use App\Traits\ZoomMeetingTrait;
namespace App\Traits;

use GuzzleHttp\Client;
use Log;

/**
 * trait ZoomMeetingTrait
 */


class ZoomController extends Controller
{
  use ZoomMeetingTrait;

  const MEETING_TYPE_INSTANT = 1;
  const MEETING_TYPE_SCHEDULE = 2;
  const MEETING_TYPE_RECURRING = 3;
  const MEETING_TYPE_FIXED_RECURRING_FIXED = 8;

  public function show($id)
  {
      $meeting = $this->get($id);

      return view('meetings.index', compact('meeting'));
  }

  public function store(Request $request)
  {
      $this->create($request->all());

      return redirect()->route('meetings.index');
  }

  public function update($meeting, Request $request)
  {
      $this->update($meeting->zoom_meeting_id, $request->all());

      return redirect()->route('meetings.index');
  }

  public function destroy(ZoomMeeting $meeting)
  {
      $this->delete($meeting->id);

      return $this->sendSuccess('Meeting deleted successfully.');
  }
}
}
