<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function categories(){
        return $this->belongsToMany(Book::class, 'category_books', 'book_id', 'category_id');
    }
}
