<?php

namespace Database\Seeders;

use App\Models\Catagory;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $category=new Catagory();
        // $category->name='films';
        // $category->is_online=1;
        // $category->save();

        // $category2=new Catagory();
        // $category2->name='Séries TV';
        // $category2->is_online=1;
        // $category2->save();

        // $category3=new Catagory();
        // $category3->name='Musique';
        // $category3->is_online=1;
        // $category3->save();

        // $category3=new Catagory();
        // $category3->name='Jeux-Vidéos';
        // $category3->is_online=1;
        // $category3->save();

        // $category4=new Catagory();
        // $category4->name='Sport';
        // $category4->is_online=1;
        // $category4->save();

        $category5=new Catagory();
        $category5->name='Les goonies';
        $category5->is_online=1;
        $category5->parent_id=1;
        $category5->save();

        $category6=new Catagory();
        $category6->name='Start Wars';
        $category6->is_online=1;
        $category6->parent_id=1;
        $category6->save();

        $category7=new Catagory();
        $category7->name='Start Trek';
        $category7->is_online=1;
        $category7->parent_id=1;
        $category7->save();

        $category8=new Catagory();
        $category8->name='Superman';
        $category8->is_online=1;
        $category8->parent_id=1;
        $category8->save();

        $category9=new Catagory();
        $category9->name='Tomb Raider';
        $category9->is_online=1;
        $category9->parent_id=4;
        $category9->save();

        $category10=new Catagory();
        $category10->name='GTA';
        $category10->is_online=1;
        $category10->parent_id=4;
        $category10->save();

    }
}
