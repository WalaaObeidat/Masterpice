<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Designs;

use Illuminate\Http\Request;

class searchController extends Controller
{
    
    public function search(Request $request)
{
    $search = $request->input('search');
    $results = Playgrounds::where('name', 'like', '%'.$search.'%')
        // ->orWhere('description', 'like', '%'.$search.'%')
        ->get();
    return view('puplicUser.search', ['results' => $results]);
}
}
