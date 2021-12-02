<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function books(){
        return $this->belongsToMany(Book::class, 'category_books', 'category_id', 'book_id');//связь через проемжуточную таблицу
    }
}
