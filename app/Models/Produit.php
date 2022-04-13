<?php

namespace App\Models;

use App\Models\Catagory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produit extends Model
{
    public function catagory(){
        return $this->belongsTo(Catagory::class);
    }
    use HasFactory;
}
