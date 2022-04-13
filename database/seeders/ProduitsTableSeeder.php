<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produit= new Produit();
        $produit->nom='T-Shirt Goonies';
        $produit->prix_ht=25;
        $produit->description='T-Shirt les Goonies ( film )';
        $produit->photo_principale='produits/t_shirtblanc.jpg';
        $produit->catagory_id=1;
        $produit->save();
        //$produit= new \App\Produit();

        $produit= new Produit();
        $produit->nom='T-Shirt GROUV';
        $produit->prix_ht=26;
        $produit->description='T-Shirt GROUV qui rend heureux ( film )';
        $produit->photo_principale='produits/GROUV.jpg';
        $produit->catagory_id=1;
        $produit->save();

        $produit= new Produit();
        $produit->nom='T-Shirt HET';
        $produit->prix_ht=27;
        $produit->description='T-Shirt HET qui rend super fort';
        $produit->photo_principale='produits/HET.jpg';
        $produit->catagory_id=6;
        $produit->save();

        $produit= new Produit();
        $produit->nom='T-Shirt KET';
        $produit->prix_ht=28;
        $produit->description='T-Shirt KET super rigolo et cynique';
        $produit->photo_principale='produits/KET.jpg';
        $produit->catagory_id=6;
        $produit->save();

        $produit= new Produit();
        $produit->nom='T-Shirt MPI';
        $produit->prix_ht=29;
        $produit->description='T-Shirt MPI : une belle aventure en famille (serie)';
        $produit->photo_principale='produits/MPI.jpg';
        $produit->catagory_id=2;
        $produit->save();

        $produit= new Produit();
        $produit->nom='T-Shirt RET';
        $produit->prix_ht=25;
        $produit->description='T-Shirt RET super cool ( film )';
        $produit->photo_principale='produits/RET.jpg';
        $produit->catagory_id=1;
        $produit->save();

        $produit= new Produit();
        $produit->nom='T-Shirt YUJ';
        $produit->prix_ht=30;
        $produit->description='T-Shirt YUJ : superman (animé)';
        $produit->photo_principale='produits/YUJ.jpg';
        $produit->catagory_id=6;
        $produit->save();

        $produit= new Produit();
        $produit->nom='T-Shirt LOK';
        $produit->prix_ht=30;
        $produit->description='T-Shirt LOK de Femme ( serie )';
        $produit->photo_principale='produits/LOK.jpg';
        $produit->catagory_id=2;
        $produit->save();

        $produit= new Produit();
        $produit->nom='T-Shirt HAR';
        $produit->prix_ht=26;
        $produit->description='T-Shirt du film les HAR ( film )';
        $produit->photo_principale='produits/HAR.jpg';
        $produit->catagory_id=1;
        $produit->save();
    }
}

