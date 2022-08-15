<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Open_recruitment extends Model
{
    use HasFactory;
    protected $table = 'open_recruitment';
    protected $fillable = ['NIM', 'full_name', 'email', 'campuses_id', 'ektm', 'cv', 'motivasi_bergabung', 'whatsapp', 'semester', 'status_interview'];
    public $timestamps = true;
}
