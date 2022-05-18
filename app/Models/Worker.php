<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    /**
     * The attributes that are mas assignable
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'fullname',
        'about',
        'services',
        'whatsapp',
        'image'
    ];
}
