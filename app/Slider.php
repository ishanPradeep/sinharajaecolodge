<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'back_image', 'logo_image', 'banner_header', 'banner_info1','banner_info2','banner_info3','banner_description','banner_title'
    ];
    	
}
