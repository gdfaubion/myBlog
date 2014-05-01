<?php

class Post extends BaseModel {

    protected $table = 'posts';

    /**
    * validation rules
    */
    public static $rules = array(
	    'title'      => 'required|max:100',
	    'body'       => 'required|max:10000'
	);

}