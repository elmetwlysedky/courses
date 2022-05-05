<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $countries = array(
            array( 'name' => 'United States'),
            array('name' => 'Canada'),
            array( 'name' => 'Afghanistan'),
            array( 'name' => 'Albania'),
            array( 'name' => 'Algeria'),
            array( 'name' => 'American Samoa'),
            array('name' => 'Andorra'),
            array( 'name' => 'Angola'),
            array( 'name' => 'Anguilla'),
            array( 'name' => 'Antarctica'),
            array('name' => 'Antigua and/or Barbuda'),
            array( 'name' => 'Argentina'),
            array( 'name' => 'Armenia'),
            array( 'name' => 'Aruba'),
            array( 'name' => 'Australia'),
            array( 'name' => 'Austria'),
            array( 'name' => 'Azerbaijan'),
            array( 'name' => 'Bahamas'),
        )

        ;

        DB::table('countries')->insert($countries);
    }
}
