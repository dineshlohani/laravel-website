<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service; // Assuming you have a Service model

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        // Implement your search logic here
        $results = Service::where('heading', 'LIKE', "%{$query}%")->get();

        // Return a view with the search results
        return view('search.results', compact('results', 'query'));
    }
}