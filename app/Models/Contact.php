<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = "contacts";

    protected $fillable = ['id', 'name', 'email', 'message', 'user_id', 'created_at'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
