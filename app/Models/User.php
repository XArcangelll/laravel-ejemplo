<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    //forma antigua
    // protected function setNameAttribute($value){
    //     $this->attributes["name"] = preg_replace("/\s+/", " ", trim(strtolower($value)));
    //  }

      //forma antigua
    // protected function getNameAttribute($value){
    //    return ucwords($value);
    //  }


    //forma moderna

    protected function name(): Attribute{
        return new Attribute(

            get: fn($value) => ucwords($value)
            ,
            set: fn($value) => preg_replace("/\s+/", " ", trim(mb_strtolower($value, 'UTF-8')))
            
        );
    }



}
