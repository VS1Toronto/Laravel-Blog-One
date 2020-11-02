<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['title', 'content', 'slug', 'status', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function comments()
    {
        //  Here we tell Eloquent that the     Ticket Model
        //  has many comments     and that Eloquent can use
        //  the     post_id ( ticket id)     to find all
        //  related comments.
        //
        //  This has defined a One to Many relationship
        //  between the two tables
        //
        //return $this->hasMany('App\Comment', 'post_id');

        return $this->morphMany('App\Comment', 'post');
    } 
}