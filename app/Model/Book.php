<?php

namespace App\Model;

use App\Model\Author;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'isbn', 'authors', 'number_of_pages', 'publisher', 'country', 'release_date'
    ];
    protected $casts = [
        'authors' => 'json'
    ];
}
