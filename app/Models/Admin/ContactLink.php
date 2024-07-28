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
    protected $appends = [ 
        'viber_link',
        'telegram_link',
        'messenger_link', 
        'facebook_link',
        'line_link', 
    ];
    public function getMessengerLinkAttribute(){
        return 'https://www.messenger.com/t/'.$this->messager;
    }
    public function getLineLinkAttribute(){
        return 'https://line.me/ti/p/'.$this->line;
    }
    public function getViberLinkAttribute(){
        return 'viber://chat?number='.$this->viber;
    }
    public function getTelegramLinkAttribute(){
        return 'https://t.me/'.$this->telegram;
    }
    public function getFacebookLinkAttribute(){
        return 'https://www.facebook.com/'.$this->facebook_page;
    }
}
