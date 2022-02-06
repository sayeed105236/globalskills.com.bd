<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function questions() {
        return $this->hasMany('App\Models\Question', 'topic_id', 'id');
    }
    public function course() {
        return $this->belongsTo('App\Models\mockTestCategory','course_id');
    }

}
