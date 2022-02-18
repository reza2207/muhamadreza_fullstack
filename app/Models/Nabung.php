<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nabung extends Model
{
    use HasFactory;

    protected $table = "nabung";
 
    protected $fillable = ['id_usertab', 'nominal'];

    public function user_post()
    {   
        
        return $this->belongsTo('App\User', 'id');
    }

}
