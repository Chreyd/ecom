<?php

namespace App\Models;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Catagory extends Model
{

    //Récuper la categorie parent d'une categorie   >> OneToMany reverse
    public function parent(){
        return $this->belongsTo(Catagory::class,'parent_id');
    }

    //Récupére les catégories enfant d'une catégorie  >> OneToMany
    public function childrens(){
        return $this->hasMany(Catagory::class,'parent_id');
    }


    //Récupérer les produit de la catégorie >> OneToMany
    public function produitsParent(){
        return $this->hasMany(Produit::class);
    }

    //Récupérer des produits situés dans une catégorie enfant au travers d'une categorie parent
    public function produitsChild(){
        return $this->hasManyThrough(Produit::class, Catagory::class,'parent_id','catagory_id');
    }

    public function produits(){
        $produits= $this->produitsParent()->with('catagory')->get()->merge($this->produitsChild()->with('catagory')->get());
        return $produits;
    }



    use HasFactory;
}
