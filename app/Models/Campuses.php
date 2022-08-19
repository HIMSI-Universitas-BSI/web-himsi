<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campuses extends Model
{
    use HasFactory;
    protected $table = 'campuses';
    protected $fillable = ['id', 'name', 'image'];
    public $timestamps = true;

    public function Open_recruitment()
    {
        return $this->hasMany(Open_recruitment::class);
    }
}
