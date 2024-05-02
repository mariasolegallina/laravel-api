<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = ['title', 'description', 'type_id'];

    public function getCoverImageAttribute($value)
    {
        return $value ? asset("storage/" . $value) : null;
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
