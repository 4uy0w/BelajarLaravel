<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illumniate\Foudation\Auth\Siswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class ShrineComics extends Model
{
    protected $primaryKey = "comic_id";
    protected $table = "comic";
    public $timestamps = false;

    protected $fillable = [
        "comic_title",
        "comic_page",
        "comic_price",
        "comic_writer",
        "genre",
        "comic_release_date",
        "comic_comment"
    ];
}
