<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'address',
        'phone_number',
        'department',
        'image',
        'education',
        'description',
        'gender',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // User And Role Relationship
    public function role()
    {
        return $this->hasOne(Role::class, 'id', 'role_id');
    }

    // User Image Store Function
    public function userAvatar($request)
    {
        $image = $request->file('image');
        $image_name = $image->hashName();
        $image_location = public_path('/upload');
        $image->move($image_location, $image_name);

        return $image_name;
    }
}
