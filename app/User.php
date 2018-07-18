<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function items()
    {
        return $this->belongsToMany(Item::class, 'item_user', 'user_id', 'want_id')->withTimestamps();
    }
    
    //ユーザー投稿用のHasManyファンクション
    public function works(){
        return $this->hasMany(Item::class);
    }
    
    //comment投稿用のHasManyファンクション
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function want_items()
    {
        return $this->items();
    }

    public function want($itemId)
    {
        // Is the user already "want"
        $exist = $this->is_wanting($itemId);

        if ($exist) {
            // do nothing
            return false;
        } else {
            // do "want"
            $this->items()->attach($itemId);
            return true;
        }
    }

    public function dont_want($itemId)
    {
        // Is the user already "want"
        $exist = $this->is_wanting($itemId);

        if ($exist) {
            // remove "want"
            $this->items()->detach($itemId);
        } else {
            // do nothing
            return false;
        }
    }

    public function is_wanting($itemId)
    {
    $user = \Auth::user()->id;

    
    $data_test = $this->items()->where('want_id', $itemId)->exists();
    // DB::select("select exists(select * from `items` inner join `item_user` on `items`.`id` = `item_user`.`want_id` where `item_user`.`user_id` = ? and `want_id` = ?) as `exists`",[$user,$itemId]);
        
    return $data_test;
    }
}
