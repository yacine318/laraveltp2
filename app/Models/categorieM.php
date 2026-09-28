<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categorieM extends Model
{
   protected $table = 'categorie';

    protected $primaryKey = 'idCat';  

    protected $fillable=['idCat','libelleCat'];
    public $timestamps = false;
}
