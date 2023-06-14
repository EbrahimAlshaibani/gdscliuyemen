<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image'
    ];
    public function majorCourse(): HasMany
    {
        return $this->hasMany(MajorCourse::class);
    }
    public function majors(): BelongsToMany
    {
        return $this->belongsToMany(Major::class,'major_course','course_id','major_id')
        ->withTimestamps();
    }
}
