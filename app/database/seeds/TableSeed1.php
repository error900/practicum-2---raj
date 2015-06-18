<?php

class TableSeed1 extends Seeder
{

public function run()
{
    DB::table('products')->delete();
    Product::create(array(
        'brand' => 'Canon',
		'model' => 'LBPCdn',
		'description' => 'Advance printer with AI',
		'supplier' => 'Canon',
		'category' => 'Printers',
		'sub_category' => 'Electronics',
		'image_1' => '12345.png',
		'image_2' => '67890.png',
		'stocks' => '5',
		'hits' => '1',
    ));
}

}