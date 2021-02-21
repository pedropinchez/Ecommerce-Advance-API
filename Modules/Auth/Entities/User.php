<?php

namespace Modules\Auth\Entities;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Modules\Business\Entities\Business;
use Modules\Business\Entities\Wishlist;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens, HasRoles;
    use SoftDeletes;

    protected $table = "users";
    protected $primaryKey = 'id';
    protected $fillable = [
        'business_id',
        'first_name',
        'surname',
        'last_name',
        'username',
        'email',
        'phone_no',
        'password',
        'language',
        'avatar',
        'banner'
    ];

    protected $guard_name = 'api';

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

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function business()
    {
        return $this->belongsTo(Business::class);
    }
}
