<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tika;
use DB;
use App\UserTika;
use App\TikaExpected;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\WardStock;
class TikaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tikas = Tika::all();
        return view('admin.tika.index', compact('tikas'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.tika.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'tika_name' => 'required',

            'expired_date' => 'required',

        ]);

        $tika = Tika::create(
            [
                'name' => $request->input('tika_name'),
                'expired_date' => $request->input('expired_date')
            ]);


        return redirect()->route('tika.index')

                        ->with('success','Tika created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tika = Tika::find($id);
        return view('admin.tika.edit',compact('tika'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request, [

            'tika_name' => 'required',

            'expired_date' => 'required',

        ]);

        $tika = Tika::find($id);

        $tika->name = $request->input('tika_name');
        $tika->expired_date = $request->input('expired_date');

        $tika->save();

        return redirect()->route('tika.index')

                        ->with('success','Tika updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("tikas")->where('id',$id)->delete();

        return redirect()->route('tika.index')

                        ->with('success','Tika deleted successfully');

    }

    public function tikaGive()
    {
        $tika_balance = WardStock::where('ward_id', Auth::user()->ward_id)->first()->current_balance;
        $tikas = Tika::all();
        $users = User::where('user_type', 4)->get();
       return view('admin.user_tika.give-tika', compact('tikas', 'users', 'tika_balance'));
    }

    public function tikaGivePost(Request $request)
    {

         $this->validate($request, [

            'tika_id' => 'required',

            'user_id' => 'required',

        ]);
         $tika_balance = WardStock::where('ward_id', Auth::user()->ward_id)->first();
        $message = '';
        if  ($tika_balance->current_balance > 0){
            $tika = UserTika::create([
                'tika_id' => $request->input('tika_id'),
                'dose_number' => $request->input('dose_number'),
                'user_id' => $request->input('user_id'),
                'taken_date' => date('Y-m-d'),
                'added_by' => Auth::user()->id
            ]);
            $tika = TikaExpected::create([
                'upozilla_id' => Auth::user()->upozilla_id,
                'union_id' => Auth::user()->union_id,
                'ward_id' => Auth::user()->ward_id,
                'date' => $request->input('next_date'),
                'user_id' => $request->input('user_id'),
                'added_by' => Auth::user()->id,
                'tika_id' => $request->input('tika_id'),
                'dose_number' => $request->input('dose_number')
            ]);
            $tika_balance->current_balance = $tika_balance->current_balance-1;
            $tika_balance->save();
            $message = 'Tika Given successfully';
        }
        else{
            $message = 'Tika Stock Not Available';
        }

        return redirect()->route('tika_given')

                        ->with('message', $message);
    }
}
