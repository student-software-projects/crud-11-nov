<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        // select * from users
        $users=User::all();
        return view('users.index',compact('users'));
    }
    public function create(){
        return view('users.create');
    }
    public function store(Request $request){

        $user=User::create($request->all());
        return redirect()->route('user.index');
    }
    public function show($id){
        // SELECT * FROM ENTIDAD WHERE ID= ?
        $user=User::find($id);
        return view('users.show',compact('user'));
    }

    public function destroy($id){
        // SELECT * FROM ENTITY WHERE ID = ?
        // TRUE = DELETE FROM ENTITY WHERE ID= ?
       $user=User::find($id)->delete();
       return redirect()->route('user.index');
    }
    public function edit($id){
       $user=User::find($id);
       return view('users.edit',compact('user'));
    }

    public function update(Request $request,$id){
      $user=User::find($id)->update($request->all());
      return redirect()->route('user.show',$id);
    }
}
