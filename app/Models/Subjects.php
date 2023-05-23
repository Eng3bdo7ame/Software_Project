<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Subjects extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'code',
        'Doctor_name',
        'section ',
        'materials',
    ];
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];
}
