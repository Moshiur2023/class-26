<?php


namespace App\classes;


class Category
{

    public $categories=[];
    public function __construct()
    {
        $this->categories=[
            [
                'id'=>1,
                'category_name'=>'books',
            ],
            [
                'id'=>2,
                'category_name'=>'ball',
            ],
            [
                'id'=>3,
                'category_name'=>'coffee',
            ],
            ];
    }
    public function allCategory(){
        return $this->categories;
    }
    public function getCategoryInfo($catId){
        $categories =$this->allCategory();
        foreach($categories as $category){
            if($category['id']==$catId){
                return $category;
            }
        }
    }
}