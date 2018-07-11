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
    
    public function bin(){
            
        $items = \DB::table('items')->select('items.*')->where('m_type', 'びん')->paginate(10);

        return view('item.index',[
            'items' => $items,
            ]);
    }
    
    public function box(){
            
        $items = \DB::table('items')->select('items.*')->where('m_type', '箱')->paginate(10);

        return view('item.index',[
            'items' => $items,
            ]);
    }
    
    public function flower(){
            
        $items = \DB::table('items')->select('items.*')->where('m_type', '花')->paginate(10);

        return view('item.index',[
            'items' => $items,
            ]);
    }
    
    public function cardboard(){
            
        $items = \DB::table('items')->select('items.*')->where('m_type', '段ボール')->paginate(10);

        return view('item.index',[
            'items' => $items,
            ]);
    }    
    
    public function others(){
            
        $items = \DB::table('items')->select('items.*')->where('m_type', 'その他')->paginate(10);

        return view('item.index',[
            'items' => $items,
            ]);
    }

    public function index(){
        
        $items = Item::paginate(10);

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
