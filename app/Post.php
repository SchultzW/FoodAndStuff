<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //table name
    protected $table='posts';
    //primary key
    public $primaryKey='id';
    //timestamps
    public $timestamps=true;

    //sets up relationship between user and post
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
