<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'content', 
        'image_url',
        'm_type',
        'u_type',
        'material1',
        'material2',
        'material3',
        'material4',
        'material5',
        'recipe1',
        'recipe2',
        'recipe3',
        'recipe4',
        'recipe5',
        'tool1',
        'tool2',
        'tool3',
        'tool4',
        'tool5',
        ];
        
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
