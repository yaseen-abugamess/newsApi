<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $fillable = [
        'date_written',
        'title',
        'content',
        'featured_image',
        'vote_up',
        'vote_down',
        'auther_id',
        'category_id'


    ];
    // for columns autofilled like id
   // protected $guarded = [];

}
