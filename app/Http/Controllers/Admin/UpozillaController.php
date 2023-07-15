<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Upozilla;
use App\Union;
use App\Ward;
class UpozillaController extends Controller
{
    public function upozillaShow(){
        $upozillas = Upozilla::all();
        return view('admin.upozilla.upozilla-view', compact('upozillas'));

    }
    public function upozillaAdd(Request $request){
        
        return view('admin.upozilla.upozilla-create');

    }
    public function upozillaAddPost(Request $request){
        $created_upozilla = Upozilla::create(
            [
                'name'=>$request->input('upozilla_name')
            ]
        );
        return redirect()->route('upozillaShow')->with('message', 'Upozilla added successfully');

    }
    public function unionShow(){
        $unions = Union::all();
        return view('admin.upozilla.view-union', compact('unions'));

    }
    public function unionAdd(Request $request){
        
        return view('admin.upozilla.union-create');

    }
    public function unionAddPost(Request $request){
        $created_union = Union::create(
            [
                'name'=>$request->input('union_name')
            ]
        );
        return redirect()->route('unionShow')->with('message', 'Union added successfully');

    }
    public function wardShow(){
        $wards = Ward::all();
        return view('admin.upozilla.ward-view', compact('wards'));

    }
    public function wardAdd(Request $request){
        
        return view('admin.upozilla.ward-create');

    }
    public function wardAddPost(Request $request){
        $created_ward = Ward::create(
            [
                'name'=>$request->input('ward_name')
            ]
        );
        return redirect()->route('wardShow')->with('message', 'Ward added successfully');

    }
}
