<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    public $primaryKey = "user_id";
    public $incrementing = true;
    public $keyType = "int";
    public $table = "user";
    public $timestamps = false;

    public $fillable = [
        'username','password','email','address','telephone_number','role','point','photo_profile'
    ];

}
