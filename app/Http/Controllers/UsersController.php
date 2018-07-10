<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;

class UsersController extends Controller
{
    public function wants($id)
    {
        $user = User::find($id);
        $wants = $user->wants()->paginate(10);

        $data = [
            'user' => $user,
            'items' => $wants,
        ];

        // $data += $this->counts($user);

        return view('item.item', $data);
    }
    
    public function store(Request $request, $id)
    {
        \Auth::user()->want($id);
        return redirect()->back();
    }

    public function destroy($id)
    {
        \Auth::user()->dont_want($id);
        return redirect()->back();
    }
}
