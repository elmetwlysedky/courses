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
//        DB::table('settings')->insert([
//            'name' => Str::random(10),
//            'value' => Str::random(10),
//            'type' => 'text',
//        ]);

        Setting::factory()
            ->count(5)
            ->create();
    }
}
