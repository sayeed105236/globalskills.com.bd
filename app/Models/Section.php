<?php

namespace App\Models;
use App\Models\Section;
use App\Models\Lesson;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $table ="sections";
    public function course(){
      return $this->belongsTo(Course::class, 'course_id');
    }

    public function lesson(){

      return $this->belongsTo(Lesson::class,'lesson_id');
    }
}
