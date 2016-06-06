<?php
namespace Application\Entity;

 class Product{
    protected $name;
	protected $price;
    protected $brand;
    protected $categories;

    public function setName($name){
         $this->name = $name;
         return $this;
     }

    public function getName(){
         return $this->name;
     }

    public function setPrice($price){
         $this->price = $price;
         return $this;
     }

    public function getPrice(){
         return $this->price;
     }

    public function setBrand(Brand $brand){
         $this->brand = $brand;
         return $this;
     }

    public function getBrand(){
         return $this->brand;
     }

    public function setCategories(array $categories){
         $this->categories = $categories;
         return $this;
     }

    public function getCategories()
     {
         return $this->categories;
     }
 }

 class Brand{
    protected $name;
	protected $url;

	public function setName($name){
         $this->name = $name;
         return $this;
     }

    public function getName(){
         return $this->name;
     }

    public function setUrl($url){
         $this->url = $url;
         return $this;
     }

    public function getUrl()
     {
         return $this->url;
     }
 }

 class Category{
    protected $name;

    public function setName($name)
     {
         $this->name = $name;
         return $this;
     }

    public function getName()
     {
         return $this->name;
     }
 }
?>