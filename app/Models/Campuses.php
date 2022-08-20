<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Campuses extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'campuses';
    protected $fillable = ['name', 'image'];
    public $timestamps = true;

    protected $keyType = 'string';
    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();
        static::creating(function (Model $model) {
            $now = Carbon::now()->format('ym');
            $config = ['table' => 'users', 'length' => 12, 'prefix' => "UID-$now"];
            $uid = IdGenerator::generate($config);
            $model->setAttribute($model->getKeyName(), $uid);
        });
    }

    public function openRecruitment()
    {
        return $this->hasMany(OpenRecruitment::class);
    }
}
