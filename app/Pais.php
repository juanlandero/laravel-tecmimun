<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'pk_idioma', 'created_at'];
    public $timestamps = false;

}
