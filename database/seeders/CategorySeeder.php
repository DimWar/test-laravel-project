<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'ورزشی' => [
                'slug' => 'sport' ,
                'icon' => 'fa fa-futbol-o'
            ] ,
            'سینما' => [
                'slug' => 'cinema' ,
                'icon' => 'fa fa-film'
            ] ,
            'بازی' => [
                'slug' => 'game' ,
                'icon' => 'fa fa-gamepad'
            ] ,
            'تاریخی' => [
                'slug' => 'university' ,
                'icon' => 'fa fa-university'
            ] ,
            'قهرمانی' => [
                'slug' => 'super' ,
                'icon' => 'fa fa-hand'
            ] ,
            'تکنولوژی' => [
                'slug' => 'computer' ,
                'icon' => 'fa fa-home'
            ] ,
            'طنز' => [
                'slug' => 'fun' ,
                'icon' => 'fa fa-smile-o'
            ] 
        ] ;

        foreach ($categories as $categoryName => $datales) {
            category::create([
                'category' => $categoryName ,
                'slug' => $datales['slug'] ,
                'icon' => $datales['icon']
            ]) ;
        }
    }
}
