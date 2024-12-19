<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rent extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'rents';
    protected $fillable = [
        'id',
        'student_id',
        'book_id',
        'status',
    ];

    public function students() : HasMany {
        return $this->hasMany(Student::class, 'id', 'student_id');
    }

    public function books() : HasMany {
        return $this->hasMany(Book::class, 'id', 'book_id');
    }
}
