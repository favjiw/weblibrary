<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'id_book',
        'title_book',
        'writer_book',
        'year_book',
        'publisher_book',
        'synopsis'
    ];
    protected $primaryKey = 'id_book';
}
