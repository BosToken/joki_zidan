<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Student extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'students';
    protected $fillable = [
        'id',
        'name',
        'gender',
        'nik',
        'nisn',
        'date_of_birth',
        'religion',
        'address',
    ];

    public function user(): HasOne{
        return $this->hasOne(User::class, 'student_id', 'id');
    }

    public function rents() : HasMany{
        return $this->hasMany(Rent::class, 'student_id', 'id');
    }
}
