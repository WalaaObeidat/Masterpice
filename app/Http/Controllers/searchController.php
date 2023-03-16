<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class searchController extends Controller
{
    //
    public function search(Request $request)
{
    $search = $request->input('search');
    $results = Category::where('name', 'like', '%'.$search.'%')
        ->orWhere('description', 'like', '%'.$search.'%')
        ->get();
    return view('search', ['results' => $results]);
}
}
