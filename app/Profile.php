<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
     protected $fillable = [
        'name','department','department_id','image','birthday','session','district','last_donat',
    ];


   
}
