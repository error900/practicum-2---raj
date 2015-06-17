<?php

class TableSeed3 extends Seeder
{

public function run()
{
    DB::table('productSubcategories')->delete();
    ProductSubCategory::create(array(
        'subcategoryName' => 'Electronics',
    ));
}

}