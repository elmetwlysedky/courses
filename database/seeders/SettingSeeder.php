<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Enum;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting = array(
            array( 'name' => 'facebook','value'=>'facebook.com','type' => 'text'),
            array('name' => 'twitter' ,'value'=>'twitter.com','type' => 'text'),
            array( 'name' => 'linkedIn' ,'value'=>'linkedIn.com','type' => 'text'),
        );
        DB::table('settings')->insert($setting);

    }
}
