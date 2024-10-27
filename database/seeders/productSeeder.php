<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $count =1;
       DB::table('products')->insert(
      
       [
        'name'=>'Watch',
'price'=> '$300',
'description'=> 'This is a ring that has been made of 100% cotton and its very soft, this one can be w',
'image_name'=>'p'.$count++.'.png',
       ]
       );
      
    }
}
