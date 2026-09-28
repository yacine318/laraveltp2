<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produitM extends Model
{
    protected $table = 'produit';

    protected $primaryKey = 'idPdt';  

    protected $fillable=['libellePdt','prixPdt','stockPdt','idCat'];

    public $timestamps = false;

    public function sacateg()
     {
	// Création d'une méthode pour assurer le lien entre un produit 
	// et sa catégorie
	// Nom du modèle de la categorie obligatoire. 2nd param : nom de la CE
    return $this->belongsTo('App\Models\categorieM','idCat');
}
}
