<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upozilla;
use App\Union;
use App\Ward;
use App\WardStock;
use App\UnionStock;
use App\UpozillaStockModel;
use App\TikaUses;
use Illuminate\Support\Facades\Auth;
use DB;

class TikaStockController extends Controller
{
    public function wardStockShow()
    {
        $upozillas = Upozilla::all();
        $unions = Union::all();
        $wards = Ward::all();
        return view('admin.stocks.ward-stock-add', compact('upozillas', 'unions', 'wards'));
        
    }
    public function wardStockAdd(Request $request)
    {
        
        $tika_stock = WardStock::create(
            [
                'upozilla_id' => $request->input('upozilla_id'),
                'union_id' => $request->input('union_id'),
                'ward_id' => $request->input('ward_id'),
                'date' => $request->input('date'),
                'opening_balance' => $request->input('stock_balance'),
                'current_balance' => $request->input('stock_balance')
            ]);
   
        return redirect()->route('wardStockShow')

                        ->with('message','Stock added successfully');
        
    }
    public function wardStockView()
    {
        $ward_stocks = DB::table('ward_stocks')
                    ->join('wards', 'ward_stocks.ward_id', '=', 'ward_stocks.id')
                    ->get();
        // $ward_stocks = WardStock::all();
        return view('admin.stocks.ward-stock-view', compact('ward_stocks'));
        
    }
    public function unionStockView()
    {
        $union_stocks = DB::table('union_stocks')
                    ->join('unions', 'union_stocks.union_id', '=', 'unions.id')
                    ->get();
        return view('admin.stocks.union-stock-view', compact('union_stocks'));
        
    }
    public function upozillaStockView()
    {
        $upozilla_stocks = DB::table('upozilla_stock_models')
                    ->join('upozillas', 'upozilla_stock_models.upozilla_id', '=', 'upozillas.id')
                    ->get();
        return view('admin.stocks.upozilla-stock-view', compact('upozilla_stocks'));
        
    }
    public function unionStockShow()
    {
        $upozillas = Upozilla::all();
        $unions = Union::all();
        return view('admin.stocks.union-stock-add', compact('upozillas', 'unions'));
        
    }
    public function unionStockAdd(Request $request)
    {
        
        $tika_stock = UnionStock::create(
            [
                'upozilla_id' => $request->input('upozilla_id'),
                'union_id' => $request->input('union_id'),
                'date' => $request->input('date'),
                'opening_balance' => $request->input('stock_balance'),
                'current_balance' => $request->input('stock_balance')
            ]);
   
        return redirect()->route('unionStockShow')

                        ->with('message','Stock added successfully');
        
    }
    public function upozillaStockShow()
    {
        $upozillas = Upozilla::all();
        return view('admin.stocks.upozilla-stock-add', compact('upozillas'));
        
    }
    public function upozillaStockAdd(Request $request)
    {
        
        $tika_stock = UpozillaStockModel::create(
            [
                'upozilla_id' => $request->input('upozilla_id'),
                'date' => $request->input('date'),
                'opening_balance' => $request->input('stock_balance'),
                'current_balance' => $request->input('stock_balance')
            ]);
   
        return redirect()->route('upozillaStockShow')

                        ->with('message','Stock added successfully');
        
    }
    public function wardTikaUsesView()
    {
        $upozillas = Upozilla::all();
        $unions = Union::all();
        $wards = Ward::all();
        return view('admin.stocks.tika-uses-add', compact('upozillas', 'unions', 'wards'));
        
    }
    public function wardTikaUsesAdd(Request $request)
    {
        
        $tika_stock = TikaUses::create(
            [
                'upozilla_id' => $request->input('upozilla_id'),
                'union_id' => $request->input('union_id'),
                'ward_id' => $request->input('ward_id'),
                'date' => $request->input('date'),
                'tika_used' => $request->input('tika_used'),
                'tika_damage' => $request->input('tika_damage'),
                'tika_expired' => $request->input('tika_expired'),
                'added_by' => Auth::user()->id,
            ]);
   
        return redirect()->route('wardTikaUsesView')

                        ->with('message','Uses added successfully');
        
    }
    public function viewUpozillaUses()
    {
        $upozilla_id =  Auth::user()->upozilla_id;
        $upozilla_uses = TikaUses::where('upozilla_id', $upozilla_id)->get();
        return view('admin.stocks.upozilla-uses-view', compact('upozilla_uses'));
        
    }
    public function viewUnionUses()
    {
        $union_id =  Auth::user()->union_id;
        $union_uses = TikaUses::where('union_id', $union_id)->get();
        return view('admin.stocks.union-uses-view', compact('union_uses'));
        
    }
    public function viewWardUses()
    {
        $ward_id =  Auth::user()->ward_id;
        $ward_uses = TikaUses::where('ward_id', $ward_id)->get();
        return view('admin.stocks.ward-uses-view', compact('ward_uses'));
        
    }
}
