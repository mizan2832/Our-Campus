<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marketingimage extends Model
{
    protected $table = 'images';

    protected $fillable = ['is_active',
                            'is_featured',
                            'image_name',
                            'image_path',
                            'image_extension',
                            'mobile_image_name',
                            'mobile_image_path',
                            'mobile_extension'
                          ];
}
