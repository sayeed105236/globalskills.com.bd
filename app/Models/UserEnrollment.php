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

        return $this->belongsTo(User::class);
    }
    public function course(){

        return $this->belongsTo(Course::class);
    }
    public function mocktest(){

        return $this->belongsTo(mockTestCategory::class);
    }

}
