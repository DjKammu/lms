<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use App\UserInfo;
use App\Wallet;

class User extends Authenticatable implements HasMedia
{
    use Notifiable;

    use HasMediaTrait;

    CONST ROLE_USER  = 'user';

    CONST TOP_SPONSER  = 'TOP';

    CONST DEFAULT_MAIL = '@shs.com';

    CONST PER_PAGE = 20;

    CONST IS_PAGI = 'pagi';

    CONST IS_ALL_COUNT = 'all';

    CONST IS_DIRECT_COUNT = 'direct';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role','number'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function UserInfo(){
      return $this->hasOne(UserInfo::class);
    }
    
    public function payment(){
        return $this->hasOne(Payment::class);
    }
    
    public function walletBy(){
        return $this->hasMany(Wallet::class,'from_user_id','id');
    }

    public function wallet(){
        return $this->hasMany(Wallet::class);
    }
}
