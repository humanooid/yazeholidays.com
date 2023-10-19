<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;

    protected $fillable = [
        'contact_person',
        'description',
        'address',
        'facebook',
        'instagram',
        'whatsapp',
    ];

    protected $table = 'informations';
}
