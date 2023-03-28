<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use DB;
use App\Models\imgs;

class testSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
      
        DB::table('categories')->insert([
             'name'=>'tooth',
             'logo'=>'fas fa-tooth',
             'image'=>'l.jpg',
            ]);
              DB::table('types')->insert([
                  'name'=>'tooth',
                'category_id'=>'1',
            ]);
                  for ($i = 0;$i<5; $i++)

{
    Product::create([
 'name'=>'Hand Sanitizer',
'image'=>'doc-1679250721.png',
'org_price'=>'50.00',
'sell_price'=>'29.00',
'type_id'=>'1',
'desc'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.',
'quantity'=>'10',
'status'=>'0',

    ]);
    
         $product=Product::latest()->first();
        imgs::create([
               'url'=>'img_product-1679250721.png',
              'product_id'=> $product->id,
        ]);


}
    }
}
