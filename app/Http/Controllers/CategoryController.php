<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function getCategories() {
        $categories = DB::table('categories')->get();
        return view('client.index', compact('categories'));
    }
}
