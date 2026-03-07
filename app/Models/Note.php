<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Setup Relationship

class Note extends Model
{
    protected $fillable = ['user_id', 'title', 'description'];

    //Many to one relationship means each notes belong to one user.
    public function user(){
        return $this->belongsTo(User::class);
    }
}
