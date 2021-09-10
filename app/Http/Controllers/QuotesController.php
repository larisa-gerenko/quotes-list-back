<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class QuotesController extends Controller
{

    public function list()
    {
        $allQuotes = Quote::all();

        return response()->json($allQuotes);
    }

    public function  add(Request $request) {
        $newQuote = new Quote();
        $newQuote->name = $request->input('name');
        $newQuote->text = $request->input('text');
        $newQuote->save();
    }
}

