<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Encore\Admin\Auth\Database\Administrator;

class Course extends Model implements HasMedia
{
	use HasMediaTrait;

    CONST ON = 'ON';

    CONST OFF = 'OFF';

    public function teachers(){
        return $this->belongsToMany(User::class,'course_user')->withTimestamps();
    }


}
