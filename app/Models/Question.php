<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'questions';

    protected $fillable = ['id', 'question', 'answer', 'faq_category_id'];

    public function category(){
        return $this->belongsTo("App\Models\FaqCategory");
    }
}
