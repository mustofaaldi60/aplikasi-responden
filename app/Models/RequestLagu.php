<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestLagu extends Model
{
    use HasFactory;

    protected $table = 'request_lagus';

    protected $guarded = ['id'];

    protected $fillable = ['title', 'artis', 'genre', 'album', 'guest_name'];
}