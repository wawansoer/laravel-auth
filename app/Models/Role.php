<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Role extends Model
{
    use HasFactory;
    public $incrementing = false; // Disable auto-incrementing for UUIDs
    protected $primaryKey = 'id'; // Specify the primary key field

    protected static function boot()
    {
        parent::boot();

        // Generate UUID when creating a new model
        static::creating(function ($model) {
            $model->id = Uuid::uuid4()->toString();
        });
        
    }
}
