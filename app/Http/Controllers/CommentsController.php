<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Item; //add
use \App\Comment; //add

class CommentsController extends Controller
{
    public function store(Request $request, $itemId) 
    {
        $item=Item::find($itemId);
        
        $this->validate($request, [
            'content' =>'required|max:191',
        ]);

        $request->user()->comments()->create([
            'content' => $request->content,
            'user_id' => \Auth::user()->id,
            'item_id' => $item->id,
        ]);

        return redirect()->back();
    }
    
     public function destroy($id)
    {
        $comment = Comment::find($id);

        if (\Auth::user()->id == $comment->user_id) {
            $comment->delete();
        }
        
        return redirect()->back();
    }
    
    // public function index($itemId){
        
    //     $comments = Comment::paginate(7);
    //     $item = Item::find($itemId);
        
    //     return view('item.show',[
    //         'item' => $item,
    //         'comments'=>$comments,
    //         ]);
    // }
}
