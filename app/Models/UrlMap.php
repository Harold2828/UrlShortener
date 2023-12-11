<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrlMap extends Model
{
    use HasFactory;

    protected $fillable = [
        'original_url',
        'short_url',
        'custom_url',
        'expiration_date',
        'user_id',
        'alive'
    ];

    public function user(){

        return $this->belongsTo(User::class);
    }

    
}
