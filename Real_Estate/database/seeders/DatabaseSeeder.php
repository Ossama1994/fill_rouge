<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Factories\CityFactory;
use App\Models\{ User, Proprety, PropretyType, Cities, Enquiries };


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::withoutEvents(function () {
            // Create 1 admin
            User::factory()->create([
                'role' => 'admin',
            ]);
            // Create 2 redactors
            User::factory()->count(2)->create([
                'role' => 'redac',
            ]);
            // Create 3 users
            User::factory()->count(3)->create();
        });

              DB::table('cities')->insert([
            [
                'name' => 'Youssoufia',
            ],
            [
                'name' => 'Casablanca',
            ],
        ]);

        DB::table('proprety_types')->insert([
            [
                'title' => 'title',
            ],
            [
                'title' => 'title_2',
            ],
        ]);
        $nbrCategories = 3;

        DB::table('enquiries')->insert([
            [
                'name' => 'tetxe',
                'email' => 'email@email.com',
                'phone'  => 040554646,
                'message' => 'un simple texte pour tester',
                'proprety_id' => 5,

            ],
        ]);
        $nbrEnquiries = 1;
        DB::table('propreties')->insert([
            [
                'title' => 'appartement',
                'slug'=> 'slug',
                'purpose'=> 'rent',
                'bedrooms'=> 2,
                'bathrooms' => 3,
                'area' => 234,
                'sale_price' => 1234,
                'rent_price' => 2000,
                'description' => 'une simple description',
                'adress' => 'second street',
                'proprety_image' => 'img00',
                'status'=> 'published',
                'user_id' =>2,
                'proprety_type_id' => 6,
            ],
            [
                'title' => 'terasse',
                'slug'=> 'slug',
                'purpose'=> 'rent',
                'bedrooms'=> 2,
                'bathrooms' => 3,
                'area' => 234,
                'sale_price' => 1234,
                'rent_price' => 2000,
                'description' => 'une simple description',
                'adress' => 'second street',
                'proprety_image' => 'img00',
                'status'=> 'published',
                'user_id' =>3,
                'proprety_type_id' => 5,
            ],
            
        ]);
        
    }
}
