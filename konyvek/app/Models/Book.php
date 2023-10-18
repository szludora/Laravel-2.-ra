<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    // átneveztem az elsődleges kulcsot
    public $primeryKey = 'book_id';
    protected $fillable = [
        'author',
        'title',
        'pieces',
    ];
}
