<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use App\Models\Category;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::with('category')->get();
        $categories = Category::all();
        return view('index', compact('contacts', 'categories'));
    }

    public function confirm(ContactRequest $request)
    {
        $tel = $request->tel1 . ' ' . $request->tel2 . ' ' . $request->tel3;
        $contact = $request->only(['last_name', 'first_name',  'gender', 'email','address','building','category_id','detail']);
        $category = Category::find($contact['category_id']);
        return view('confirm', compact('contact','category'),['tel' => $tel]);

    }

    public function store(Request $request)
    {
        $tel = $request->tel1 . ' ' . $request->tel2 . ' ' . $request->tel3;
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tel', 'address','building','category_id','detail']);
        Contact::create($contact,['tel' => $tel]);
        return view('thanks');

    }
}
