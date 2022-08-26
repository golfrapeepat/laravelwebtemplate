<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\product;

class productsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          // ลบข้อมูลเก่าออกก่อน
          DB::table('products')->delete();

          $data = [
              [
                'name' => 'Samsung Galaxy S21',
                'slug' => 'samsung-galaxy-s21',
                'description' => 'Similique molestias exercitationem officia aut. Itaque doloribus et rerum voluptate iure. Unde veniam magni dignissimos expedita eius',
                'price' => 18500.00,
                'image' => 'https://via.placeholder.com/800x600.png/008876?text=samsung'
              ]
          ];
  
          product::insert($data);
  
          // การ faker ข้อมูล
         product::factory(1000)->create();
  
    }
}
