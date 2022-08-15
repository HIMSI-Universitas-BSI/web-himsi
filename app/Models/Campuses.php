<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campuses extends Model
{
    use HasFactory;
    protected $table = 'campuses';
    protected $fillable = ['name', 'image'];
    public $timestamps = true;
}
