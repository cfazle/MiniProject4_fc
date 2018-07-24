<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sharemarket;
class SharemarketController extends Controller
{
    public function create()
    {
        return view('sharemarket');
    }


    //create data

    public function store(Request $request)
    {
        $stock = new Sharemarket();
        $stock->companyname = $request->get('companyname');
        $stock->price = $request->get('price');
        $stock->save();
        return redirect('/sharemarket/index')->with('success', 'Stock has been added');
    }

    //View file
    public function displayStock()
    {
        $stocks = Sharemarket::sortable()->paginate(5);
        return view('index',compact('stocks'));
    }


}
