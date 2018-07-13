<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Work;

class WorksController extends Controller
{
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
            
        ]);

        return redirect('works/create');
    }
    
    public function destroy($id)
    {
        $work = \App\Work::find($id);

        if (\Auth::user()->id === $work->user_id) {
            $work->delete();
        }

        return redirect()->back();
    }
    
    public function create()
    {
        $user = \Auth::user();
        $works = $user->works()->orderby('created_at','desc')->paginate(10);
        $data = [
            'user' => $user,
            'works' => $works,
            ];
        $data += $this->counts($user);    
        return view('works.create', $data);
    }
    
    public function show($id){
        $work = Work::find($id);
        
        

        return view('works.show',['work'=> $work]);
    }
}
