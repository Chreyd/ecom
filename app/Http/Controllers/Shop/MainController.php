<?php

namespace App\Http\Controllers\Shop;

use App\Models\Produit;
use App\Models\Catagory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {

        $produit= Produit::with('catagory')->get();
        //$categories=Catagory::where('is_online',1)->get();

        //dd($produit);

        return view('shop.index',compact('produit'));
    }

    public function produit(Request $request){
       // dd($_GET))
       //dd($request->id);
        $categories=Catagory::where('is_online',1)->get();
        $produit=Produit::find($request->id);

        return view('shop.produit',compact('produit'));
    }

    public function viewByCategory(Request $request){
        //Récupérer toutes les categories >> is_online==1
        //$categories=Catagory::where('is_online',1)->get();
        // dd($categories);

        //$produits=Produit::where('catagory_id',$request->id)->get();
        $category= Catagory::find($request->id);
        $produits= $category->produits();
        return view('shop.categories',compact('produits','category'));
    }
}
