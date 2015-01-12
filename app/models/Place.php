<?php

class Place extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'name' => 'required|unique:places,name'
	];

	// Don't forget to fill this array
	protected $fillable = ['name', 'halal'];

}