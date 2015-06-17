<?php

class TableSeed2 extends Seeder
{

public function run()
{
    DB::table('productCategories')->delete();
    ProductCategory::create(array(
        'categoryName' => 'Printers',
    ));
}

}