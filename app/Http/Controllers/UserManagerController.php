<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;

class UserManagerController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showUser()
    {
        $users = User::all();
        return view('admin/pages/listUser')->with('users',$users);
    }

    public function getAddUser()
    {
        return view('admin/pages/addUser');
    }


     public function postAddUser(Request $request)
    {
    	$this->validate($request,[
            "name"=>'required|min:3',
            'phone' => 'required|digits:8',
            'email' => 'required|email|unique:users',
            "password"=>'required|min:8',
            'confirm' => 'required|same:password'

        ]);
        $users = new User;
        $users->name = $request->input('name');
        $users->phone = $request->input('phone');
        $users->email = $request->input('email');
        $users->password = Hash::make($request->input('password'));

        $password = $request->input('password');
        $confirm = $request->input('confirm');

        if ($password == $confirm){
           $users->save(); 
           $message = 'your successfuly save user '.$users->name;
            return redirect('admin/addUser')->with('success', $message);
        }else{
             $message = 'your password doesn\'t match'.$password.' # '.$confirm;
             return redirect('admin/addUser')->with('fail', $message);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\userManager  $userManager
     * @return \Illuminate\Http\Response
     */
    public function edituser(Request $request, $id)
    {
        //

        $users = User::findOrFail($id);
        return view('admin/pages/editUser')->with('users', $users);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\userManager  $userManager
     * @return \Illuminate\Http\Response
     */
    public function updateuser(Request $request, $id)
    {
        //
        $this->validate($request,[
            "name"=>'required|min:3',
            'phone' => 'required|digits:8',
            'email' => 'required|email|unique:users',
            "password"=>'required|min:8',
            'confirm' => 'required|same:password'

        ]);

        $users = User::find($id);
        $oldname= $users->name;
        $users->name = $request->input('name');
        $users->phone = $request->input('phone');
        $users->email = $request->input('email');
        $users->password = $request->input('password');
        $users->update();
        $message = 'your successfuly updated <strong>'.$oldname.'</strong>';
        return redirect('admin/listUser')->with('successupdate', $message);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\userManager  $userManager
     * @return \Illuminate\Http\Response
     */
    public function deleteuser(Request $request, $id)
    {
        //
        $users = User::findOrFail($id);
        $oldname= $users->name;
        $users->delete();
        $message = 'your successfuly delete <strong>'.$oldname.'</strong>';
        return redirect('admin/listUser')->with('successdelete', $message);


    }
}
