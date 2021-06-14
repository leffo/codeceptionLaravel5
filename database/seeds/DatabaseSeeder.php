<?php

use App\City;
use App\Country;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Country::class, 20)->create()->each(function($country) {
            $country->cities()->saveMany(factory(City::class, 10)->make());
        });
    }
}
