<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionRequest extends Model
{
    use HasFactory;

    protected $table = 'question_requests';

    protected $fillable = ['id', 'user_id', 'request'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
