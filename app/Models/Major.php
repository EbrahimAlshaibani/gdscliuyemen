<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Major extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }
    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class,'major_course','major_id','course_id')
        ->withTimestamps();
    }
}
