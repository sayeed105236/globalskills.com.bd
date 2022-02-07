<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\mockTestCategory;
use App\Models\User;
use App\Models\Course;

class UserEnrollment extends Model
{
    use HasFactory;
    protected $table ="user_enrollments";

    public function users(){

        return $this->belongsTo(User::class,'user_id');
    }
    public function course(){

        return $this->belongsTo(Course::class,'course_id');
    }
    public function mocktest(){

        return $this->belongsTo(mockTestCategory::class,'mocktest_id');
    }

}
