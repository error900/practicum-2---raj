<?php

class ProductSubCategory extends Eloquent {

	protected $table = 'productSubcategories';

	protected $fillable = array('subcategoryName');

	protected $guarded = array('id');

	public $timestamps = true; 

	public function getSubCategoryName()
	{
	  return $this->subcategoryName;
	}
}