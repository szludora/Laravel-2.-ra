<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copy extends Model
{
    use HasFactory;
    public $primeryKey = 'copy_id';
    protected $fillable = [
        'book_id',
        'user_id',
    ];
}
