<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use \App\Item; //add
use \App\User; //add
use \App\Comment; //add

class ItemsController extends Controller
{
    
////////////////////////材料カテゴリ/////////////////////////////
    public function materials(){
        return view('item.materials');
    }
    
    public function bin(){
        
        $items = \DB::table('items')->select('items.*')->where('m_type', 'びん')->orderby('created_at','desc')->paginate(9);
        
        return view('item.index',[
            'items' => $items,
            ]);
    }
    
    public function box(){
            
        $items = \DB::table('items')->select('items.*')->where('m_type', '箱')->orderby('created_at','desc')->paginate(9);

        return view('item.index',[
            'items' => $items,
            ]);
    }
    
    public function flower(){
            
        $items = \DB::table('items')->select('items.*')->where('m_type', '花')->orderby('created_at','desc')->paginate(9);

        return view('item.index',[
            'items' => $items,
            ]);
    }
    
    public function cardboard(){
            
        $items = \DB::table('items')->select('items.*')->where('m_type', '段ボール')->orderby('created_at','desc')->paginate(9);

        return view('item.index',[
            'items' => $items,
            ]);
    }    
    
    public function others(){
            
        $items = \DB::table('items')->select('items.*')->where('m_type', 'その他')->orderby('created_at','desc')->paginate(9);

        return view('item.index',[
            'items' => $items,
            ]);
    }

    public function index(){
        
        $items = \DB::table('items')->select('items.*')->orderby('created_at','desc')->paginate(9);

        return view('item.index',[
            'items' => $items,
            ]);
    }
    
/////////////////////////完成品カテゴリ/////////////////////////////////
    
    public function usages(){
        return view('item.usages');
    }
    
    public function aroma(){
        
        $items = \DB::table('items')->select('items.*')->where('u_type', 'アロマ')->orderby('created_at','desc')->paginate(9);
        
        return view('item.index',[
            'items' => $items,
            ]);
    }
    
    public function cover(){
            
        $items = \DB::table('items')->select('items.*')->where('u_type', 'カバー')->orderby('created_at','desc')->paginate(9);

        return view('item.index',[
            'items' => $items,
            ]);
    }
    
    public function light(){
            
        $items = \DB::table('items')->select('items.*')->where('u_type', '照明')->orderby('created_at','desc')->paginate(9);

        return view('item.index',[
            'items' => $items,
            ]);
    }
    
    public function interior(){
            
        $items = \DB::table('items')->select('items.*')->where('u_type', 'インテリア')->orderby('created_at','desc')->paginate(9);

        return view('item.index',[
            'items' => $items,
            ]);
    }    
    

    public function storage(){
        
        $items = \DB::table('items')->select('items.*')->where('u_type', '収納')->orderby('created_at','desc')->paginate(9);

        return view('item.index',[
            'items' => $items,
            ]);
    }
    
    public function u_others(){
            
        $items = \DB::table('items')->select('items.*')->where('u_type', 'その他')->orderby('created_at','desc')->paginate(9);

        return view('item.index',[
            'items' => $items,
            ]);
    }
    
///////////////////////////////////////////////////////////////////
    
    public function show($id){
        
        $item = Item::find($id);
        $process = \DB::table('item_process')->where('item_id',$id)->first();
        $user_id = $item->user_id;
        if($item == null) {
            return redirect('/');
        }

        
       $comments = Comment::where('item_id',$id)->orderby('created_at','desc')->paginate(5);

      return view('item.show', [
          'item' => $item,
          'comments'=>$comments,
          'process' => $process,
      ]);
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:191',
            'content' => 'required|max:191',
            'image_url' => 'required|max:191',
            'm_type' => 'required|max:191',
            'u_type' => 'required|max:191',
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
            'process1' => 'max:191',
            'process2' => 'max:191',
            'process3' => 'max:191',
            'process4' => 'max:191',
            'process5' => 'max:191',
            
            
        ]);

        $request->user()->works()->create([
            'content' => $request->content,
            'name' => $request->name,
            'content' => $request->content,
            'image_url' => $request->image_url,
            'm_type' => $request->m_type,
            'u_type' => $request->u_type,
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
        
        
        return redirect('works/index');
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
        $data = [
            'user' => $user,
            ];
        $data += $this->counts($user);    
        return view('works.create', $data);
    }
    
    public function works(){
        
        $user = \Auth::user();
        $items = $user->works()->orderby('created_at','desc')->paginate(10);

        $data = [
            'user' => $user,
            'items' => $items,
            ];
        $data += $this->counts($user);    
        return view('works.index', $data);
    }
}
