<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class game extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'game';
    protected $fillable = [
        'nama',
        'url',
    ];
    public $timestamps = false;
}
