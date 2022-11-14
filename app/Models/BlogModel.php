<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogModel extends Model
{
    protected $table ="tabel_blog";
    //protected $fillable = ['author','title','body','keyword'];
    protected $guarded = ['id'];
}
