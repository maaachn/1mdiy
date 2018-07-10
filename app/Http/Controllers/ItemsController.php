<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use \App\Item; //add

class ItemsController extends Controller
{
    public function materials(){
        return view('item.materials');
    }
    
    public function index(){
        
        $items = Item::all();

        return view('item.index',[
            'items' => $items,
            ]);
    }
    
    public function show($id){
        
        $item = Item::find($id);
        // $want_users = $item->want_users;
       

      return view('item.show', [
          'item' => $item,
        //   'want_users' => $want_users,
       
      ]);
    }
}
