<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'instructor_id',
        'thumbnail',
        'videoUrl'
        
    ];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function Instructor()
    {
        return $this->belongsTo(Instructor::class);
    }
}
