<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['name', 'pages', 'years']; //inserite i campi compilabili dall'utente
}



  //
    //protected $table = 'libri'; 