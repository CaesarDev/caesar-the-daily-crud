<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $table = "posts";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'title', 'body', 'status'
    ];
    /**
     * Scope a query to only include popular users.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Relations\HasMany
     */

    /*public static function apply(Post $post)
    {
        $post->with(['id' => function ($post){
            $post->orderBy('body')
        }])
    }*/

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    public function scopeSortByLength($post)
    {
        return $post->orderBy('strLength', '>', 'body');
    }


}
