<?php

class ProductCategory extends Eloquent {

	protected $table = 'productCategories';

	protected $fillable = array('categoryName');

	protected $guarded = array('id');

	public $timestamps = true; 

	public function getCategoryName()
	{
	  return $this->categoryName;
	}
}