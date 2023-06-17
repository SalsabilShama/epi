<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Spatie\Permission\Models\Role;
use Hash;
use App\Upozilla;
use App\Union;
use App\Ward;

class AdminController extends Controller
{
    public function index(){
    	return view('admin.dashboard');
    }
    public function showAdminView(Request $request){
    	$admins = User::where('user_type','!=', 4)->get();
        return view('admin.index',compact('admins'))->with('i', ($request->input('page', 1) - 1) * 5);
    	// return view('admin.show');
    }
    public function createAdminView(){
        $roles = Role::pluck('name','name')->all();
        $upozillas = Upozilla::all();
        $unions = Union::all();
        $wards = Ward::all();
    	return view('admin.create', compact('roles', 'upozillas', 'unions', 'wards'));
    }
    public function storeAdmin(Request $request){
        $this->validate($request, [

            'name' => 'required',

            'email' => 'required|email|unique:users,email',

            'password' => 'required',

            'role' => 'required'

        ]);

        $input = $request->all();

        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->user_type = 1;
        $user->upozilla_id = $request->input('upozilla_id');
        $user->union_id = $request->input('union_id');
        $user->ward_id = $request->input('ward_id');
        $user->save();

        $user->assignRole($request->input('role'));

        return redirect()->route('admin.index')

                        ->with('success','User created successfully');
        return view('admin.index');
    }
     public function adminEdit($id){
        $admin = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $admin->roles->pluck('name','name')->first();
        return view('admin.edit',compact('admin','roles','userRole'));
    }
    public function adminUpdate(Request $request){
        $admin = User::find($request->input('admin_id'));
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->save();
        $admin->syncRoles([]);
        $admin->assignRole($request->input('role'));
        return redirect()->route('admin.index');
    }
}
