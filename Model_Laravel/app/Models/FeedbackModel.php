<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class FeedbackModel extends Model
{
    use HasFactory;

    public $primaryKey = "feedback_id";
    public $incrementing = true;
    public $keyType = "int";
    public $table = 'feedback';

    public $timestamps = false;

    public $fillable = [
        'feedback_email_sender','feedback_user_sender','feedback_comment'
    ];
}
