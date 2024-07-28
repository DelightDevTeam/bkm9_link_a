<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactLink extends Model
{
    use HasFactory;
    protected $fillable = [
        'viber',
        'game_site_link',
        'facebook_page',
        'line',
        'telegram',
        'messager'
    ];
}
