<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Functionality extends Model
{
    use HasFactory;

    protected $table = 'functionalities';

    protected $fillable = [
    	'name',
    	'slug',
        'category_ids',
        'requirements',
        'description',
        'useful_links',
        'tag_ids',
    	'status',
    ];
}