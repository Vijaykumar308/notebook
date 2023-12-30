<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Arr;

class Note extends Model
{
    use HasFactory;
    use Sluggable;
    protected $fillable = ['title','body','user_id','category_id'];

    public function Sluggable():array{
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


    public function user() {
        return $this->belongsTo(User::class);
    }

    public function category() {
        return $this->belongsToMany(Category::class);
      //  return $this->belongsToMany(Category::class);

    }
}
