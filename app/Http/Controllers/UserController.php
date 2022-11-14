<?php

namespace App\Http\Controllers;

use App\Models\UserList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function index(){
        $users = UserList::all();
        return view('user.index', ['users' => $users]);
    }

    public function create(){
        return view('user.create');
    }
    public function store(Request $request){
       $userList = new UserList;

       $userList->name = $request->name;
       $userList->title = $request->title;

       if($request->hasfile('image')){
         $file = $request->file('image');
        //  $fileName = $file->getClientOriginalName();
        //  $extenstion = $file->getClientOriginalExtension();
        //  $fileName = $name . $extenstion;

            $extenstion = $file->getClientOriginalExtension();
            $fileName = time(). '.' . $extenstion;

         $file->move('uploads/image', $fileName);

         $userList->image = $fileName;
       }

       $userList->save();

       return redirect()->route('user.index')->with('message', "User added successfully");
    }

    public function edit($id){
        $user = UserList::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = UserList::find($id);

        $user->name = $request->name;
        $user->title = $request->title;

        if($request->hasfile('image')){

            $destination = 'uploads/image/' . $user->image;

            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            // $fileName = $file->getClientOriginalName();
            $extenstion = $file->getClientOriginalExtension();
            $fileName = time(). '.' . $extenstion;
   
            $file->move('uploads/image', $fileName);
   
            $user->image = $fileName;
          }

        $user->update();

        return redirect()->route('user.index')->with('message', "User updated successfully");

    }


    public function delete($id){
        $user = UserList::find($id);

        $destination = 'uploads/image/' . $user->image;
            if(File::exists($destination)){
                File::delete($destination);
            }

        $user->delete();
        return redirect()->route('user.index')->with('message', "User Deleted successfully");
    }
}
