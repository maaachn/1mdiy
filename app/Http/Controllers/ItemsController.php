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
            
        $items = \DB::table('items')->select('items.*')->where('m_type', 'びん')->paginate(9);

        return view('item.index',[
            'items' => $items,
            ]);
    }
    
    public function box(){
            
        $items = \DB::table('items')->select('items.*')->where('m_type', '箱')->paginate(9);

        return view('item.index',[
            'items' => $items,
            ]);
    }
    
    public function flower(){
            
        $items = \DB::table('items')->select('items.*')->where('m_type', '花')->paginate(9);

        return view('item.index',[
            'items' => $items,
            ]);
    }
    
    public function cardboard(){
            
        $items = \DB::table('items')->select('items.*')->where('m_type', '段ボール')->paginate(9);

        return view('item.index',[
            'items' => $items,
            ]);
    }    
    
    public function others(){
            
        $items = \DB::table('items')->select('items.*')->where('m_type', 'その他')->paginate(9);

        return view('item.index',[
            'items' => $items,
            ]);
    }

    public function index(){
        
        $items = Item::paginate(9);

        return view('item.index',[
            'items' => $items,
            ]);
    }
    
            
    
    public function show($id){
        
        $item = Item::find($id);
        if($item == null) {
            return redirect('/');
        }
        // $want_users = $item->want_users;
       

      return view('item.show', [
          'item' => $item,
        //   'want_users' => $want_users,
       
      ]);
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:191',
            'content' => 'required|max:191',
            'image_url' => 'required|max:191',
            'm_type' => 'required|max:191',
            'material1' => 'required|max:191',
            'material2' => 'max:191',
            'material3' => 'max:191',
            'material4' => 'max:191',
            'material5' => 'max:191',
            'recipe1' => 'required|max:191',
            'recipe2' => 'max:191',
            'recipe3' => 'max:191',
            'recipe4' => 'max:191',
            'recipe5' => 'max:191',
            'tool1' => 'required|max:191',
            'tool2' => 'max:191',
            'tool3' => 'max:191',
            'tool4' => 'max:191',
            'tool5' => 'max:191',
            
            
        ]);

        $request->user()->works()->create([
            'content' => $request->content,
            'name' => $request->name,
            'content' => $request->content,
            'image_url' => $request->image_url,
            'm_type' => $request->m_type,
            'material1' => $request->material1,
            'material2' => $request->material2,
            'material3' => $request->material3,
            'material4' => $request->material4,
            'material5' => $request->material5,
            'recipe1' => $request->recipe1,
            'recipe2' => $request->recipe2,
            'recipe3' => $request->recipe3,
            'recipe4' => $request->recipe4,
            'recipe5' => $request->recipe5,
            'tool1' => $request->tool1,
            'tool2' => $request->tool2,
            'tool3' => $request->tool3,
            'tool4' => $request->tool4,
            'tool5' => $request->tool5,
            'user_id' => \Auth::user()->id,
        ]);

        return redirect('works/create');
    }
    
    public function destroy($id)
    {
        $item = Item::find($id);
        // $a = $item->m_type;
        // if ($a == 'びん'){
        //     $b ='bin';
        // }
        // elseif($a == '空き箱'){
        //     $b = 'box';
        // }
        // elseif ($a == '花') {
        //     $b = 'flower';
        // }
        // elseif ($a == '段ボール') {
        //     $b = 'cardboard';
        // }
        // elseif ($a == 'その他') {
        //     $b = 'others';
        // }
        // else {
        //     $b = 'index';
        // }

        if (\Auth::user()->id == $item->user_id) {
            $item->delete();
        }
        
        //場合分けの際はredirect($b);
        return redirect()->back();
    }
    
    public function create()
    {
        $user = \Auth::user();
        $items = $user->works()->orderby('created_at','desc')->paginate(10);
        $data = [
            'user' => $user,
            'items' => $items,
            ];
        $data += $this->counts($user);    
        return view('works.create', $data);
    }
}
