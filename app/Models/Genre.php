<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Uuid;

class Genre extends Model
{
    use SoftDeletes, Traits\Uuid;
    protected $fillable = ['name', 'is_active'];
    protected $dates = ['deleted_at'];
    protected $casts = [
        'is_active' => 'boolean'
    ];
    protected $keyType = 'string';
    public $incrementing = false;
}
