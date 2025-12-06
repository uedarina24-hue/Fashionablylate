<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;

class AuthController extends Controller{

    public function admin()
    {
        $authors = Contact::Paginate(7);
        $contacts = Contact::with('category')->get();
        $categories = Category::all();

        return view('auth.admin',compact('contacts', 'categories'),['authors' => $authors]);
    }

    public function search(Request $request)
    {
        $contacts = contact::with('category')->CategorySearch($request->category_id)->KeywordSearch($request->keyword)->get();
        $categories = Category::all();

        return view('auth.search', compact('contacts', 'categories'));
    }



}