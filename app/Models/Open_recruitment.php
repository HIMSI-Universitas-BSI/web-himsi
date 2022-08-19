<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Open_recruitment extends Model
{
    use HasFactory;
    protected $table = 'open_recruitment';
    protected $fillable = ['id', 'NIM', 'full_name', 'email', 'campus', 'ektm', 'cv', 'motivasi_bergabung', 'whatsapp', 'semester', 'status_interview'];
    public $timestamps = true;
}
