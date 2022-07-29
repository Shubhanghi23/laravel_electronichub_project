<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            ['name'=>'Panasonic Tv',
            'price'=>'420',
            'description'=>'High quality picture and sound,Hdr multi support,Usb,Smart tv features&internet apps',
            'category'=>'electronics',
            'gallery'=>'https://www.bing.com/th?id=OIP.B7cyTXrIrfpGLiLKGcatiwHaGu&w=262&h=238&c=8&rs=1&qlt=90&o=6&dpr=1.25&pid=3.1&rm=2',
 
         ],
         [
             'name'=>'Oneplus Mobile',
             'price'=>'220',
             'description'=>'Oneplus is known for their solid battery life and fast charging support',
             'category'=>'electronics',
             'gallery'=>'https://www.bing.com/th?id=OIP.sE-Cq7L5X9XjDIfyk7Ht9gHaF6&w=119&h=106&c=8&rs=1&qlt=90&o=6&dpr=1.25&pid=3.1&rm=2',
  
         ],
         [
             'name'=>'Lg Washing Machine',
             'price'=>'300',
             'description'=>'Lg washing machingfeaturing cutting-edge technology and loaded with Direct drive motor',
             'category'=>'electronics',
             'gallery'=>'https://th.bing.com/th/id/OIP.q5sSmTFEl0mSiroZXfE57wHaKN?w=156&h=214&c=7&r=0&o=5&dpr=1.25&pid=1.7',
  
         ],
         [
             'name'=>'Samsung Refrigerator',
             'price'=>'520',
             'description'=>'Developed with latest technology in a range of sizes and designs',
             'category'=>'electronics',
             'gallery'=>'https://www.bing.com/th?id=OIP.lX6dVT36WjfqjN_DO2sUPQHaJr&w=218&h=285&c=8&rs=1&qlt=90&o=6&dpr=1.25&pid=3.1&rm=2',
  
         ],
         [
             'name'=>'iphone 12',
             'price'=>'3600',
             'description'=>'iphone 12 comes with latest technology and smart security',
             'category'=>'electronics',
             'gallery'=>'https://www.bing.com/th?id=OIP.ipbv7j6fdG_7b_hYu3b7fwHaIw&w=229&h=271&c=8&rs=1&qlt=90&o=6&dpr=1.25&pid=3.1&rm=2',
  
         ],
 
     
     
     
     
     ]);
 
 
 
 
 
 
    }
}
