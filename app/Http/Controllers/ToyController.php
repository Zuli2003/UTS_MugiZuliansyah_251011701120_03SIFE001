<?php

namespace App\Http\Controllers;

use App\Models\Toy;
use Illuminate\Http\Request;

class ToyController extends Controller
{
    public function home()
    {
        $featured = Toy::inRandomOrder()->take(4)->get();
        $categories = Toy::select('category')->distinct()->pluck('category');
        return view('home', compact('featured', 'categories'));
    }

    public function index(Request $request)
    {
        $query = Toy::query();

        if ($request->filled('q')) {
            $query->where('name', 'like', '%' . $request->input('q') . '%');
        }

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        $toys = $query->orderBy('name')->get();
        $categories = Toy::select('category')->distinct()->pluck('category');

        return view('toys.index', compact('toys', 'categories'));
    }

    public function show(Toy $toy)
    {
        $related = Toy::where('category', $toy->category)
        ->where('id', '!=', $toy->id)
        ->take(4)
        ->get();

        return view('toys.show', compact('toy', 'related'));
    }
}
