<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Dmrdv extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'nom','date_naiss',
        'email','tel','date','heure','prelevement',
        'choix',
        'localisation','file','genre','user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}

