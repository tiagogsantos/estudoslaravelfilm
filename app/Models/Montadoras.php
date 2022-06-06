<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Montadoras extends Model
{
    use HasFactory;

    protected $table = 'montadoras';
    protected $primaryKey = 'id';

    protected $fillable = [
        'marcas',
        'image'
    ];
}
