<?php

class ProductSupplier extends Eloquent {

	protected $table = 'productSuppliers';

	protected $fillable = array('supplierName');

	protected $guarded = array('id');

	public $timestamps = true; 

	public function getSupplierName()
	{
	  return $this->supplierName;
	}
}