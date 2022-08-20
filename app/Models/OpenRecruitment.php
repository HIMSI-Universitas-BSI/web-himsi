<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class OpenRecruitment extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'open_recruitment';
    protected $fillable = ['NIM', 'full_name', 'email', 'campus', 'ektm', 'cv', 'motivasi_bergabung', 'whatsapp', 'semester', 'status_interview'];
    public $timestamps = true;

    protected $keyType = 'string';
    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();
        static::creating(function (Model $model) {
            $model->setAttribute($model->getKeyName(), Str::uuid()->toString());
        });
    }
    public function campuses()
    {
        return $this->belongsTo(Campuses::class);
    }
}
