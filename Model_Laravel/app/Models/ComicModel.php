<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class ComicModel extends Model
{
    use HasFactory;

    public $primaryKey = "comic_id";
    public $incrementing = true;
    public $keyType = "int";
    public $table = 'comic';

    public $timestamps = false;

    protected $fillable = [
        'comic_title','comic_price','comic_writer','genre','comic_release_date','comic_comment','comic_page'
    ];
}
