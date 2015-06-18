<?php

class Product extends Eloquent {

	protected $table = 'products';

	protected $fillable = array('brand', 'model', 'description', 'supplier', 'category', 'sub_category', 'image_1', 'image_2', 'stocks', 'hits');

	protected $guarded = array('id');

	public $timestamps = true; 

	public function getBrand()
	{
	  return $this->brand;
	}

	public function getModel()
	{
	  return $this->model;
	}
	
	public function getDescription()
	{
	  return $this->description;
	}
	
	public function getSupplier()
	{
	  return $this->supplier;
	}
	
	public function getCategory()
	{
	  return $this->category;
	}
	
	public function getSub_category()
	{
	  return $this->sub_category;
	}
	
	public function getImage1()
	{
	  return $this->image_1;
	}
	
	public function getImage2()
	{
	  return $this->image_2;
	}
	
	public function getStocks()
	{
	  return $this->stocks;
	}
	
	public function getHits()
	{
	  return $this->hits;
	}

}