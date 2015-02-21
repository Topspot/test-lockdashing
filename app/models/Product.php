<?php

class Product extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['title', 'subtitle', 'likes', 'star', 'price', 'image', 'category_id', 'brand_id'];
                public function categories(){
        return $this->hasMany('Category');
        }
        public function brands(){
            return $this->hasMany('Brand');
        }

}