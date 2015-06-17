<?php

class TableSeed4 extends Seeder
{

public function run()
{
    DB::table('productSuppliers')->delete();
    ProductSupplier::create(array(
        'supplierName' => 'Canon',
    ));
}

}