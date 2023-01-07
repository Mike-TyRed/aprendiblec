<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Datos que solo acepta guardar la propiedad
    //protected $fillable = ['title', 'body'];

    //Datos que no aceptara guardar
    protected $guarded = ['title', 'body'];
}
