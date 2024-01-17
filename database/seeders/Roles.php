<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Roles extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date=Carbon::now();
        DB::table('roles')->insert([
         ['title'=>'Гражданин', 'created_at'=>$date,'updated_at'=>$date],
         ['title'=>'Администратор', 'created_at'=>$date,'updated_at'=>$date],
        ]);
    }
}
