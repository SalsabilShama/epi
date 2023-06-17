<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upozilla;
use App\Union;
use App\Ward;
use App\WardStock;
use App\UnionStock;
use App\UpozillaStockModel;

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
}
