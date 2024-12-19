<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Book extends Model
{
    use HasFactory, HasUuids;

    protected $table = "books";
    protected $fillable = [
        'id',
        'name',
        'category',
        'publisher',
        'publication_year',
        'stock'
    ];

    public function rent() : HasOne{
        return $this->hasOne(Rent::class, 'book_id', 'id');
    }
}
