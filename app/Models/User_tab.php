<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_tab extends Model
{
    use HasFactory;

    protected $table = "user_tab";
 
    protected $fillable = ['nama', 'image'];

    /* public function user_post()
    {   
        
        return $this->belongsTo('App\User', 'id');
    } */

}
