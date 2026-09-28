<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produitM;
use App\Models\categorieM;

class prodcategC extends Controller
{
     public function index()
     {
        $lesProd = produitM::all();
        return view('indexV' ,['lesProd'=>$lesProd]);  
      
     }  

     public function newp()
    {
         return view('formnewproduitV', ['categ' => categorieM::all()]);
    }

     public function newsave(Request $request)
     { 
          $data = new produitM();

          $data->libellePdt = $request->txtLib;
          $data->prixPdt = $request->txtPrix;
          $data->stockPdt = $request->txtStock;

          // Bien que l'idCat soit récupéré dans le Form, l'ORM Eloquent a besoin de récupérer
          // l'objet catégorie du produit à créer dans la bd (cf ci-dessous)
         $categ = categorieM::where('idCat', $request->cboCat)->first();
         $data->sacateg()->associate($categ);
         $data->save();
          return redirect()->route('accueil');    
     }
}


