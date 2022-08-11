<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Nonstandard\Uuid;

class Article extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'record_uuid'
    ];

    protected $guarded = [];

    protected static function booted()
    {
        static::creating(fn(Article $article) => $article->uuid = (string) Uuid::uuid4());
    }

    public function record() 
    {
        return $this->hasOne(
            Record::class, 
            'uuid', 
            'record_uuid'
        );
    }
}
