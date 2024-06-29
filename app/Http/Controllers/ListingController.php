<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use App\Models\Listing;
use Illuminate\Http\Request;


class ListingController extends Controller
{
    //To display all the gallery listings
    public function index(){
        return view('gallery.index',
        ['listings'=>Listing::latest()->filter(request(['tag','search']))->paginate(6)
    ]);
    }

    // To display individual listings
    public function show(Listing $listing){
        if($listing){
            return view('gallery.show', ['listing'=>$listing]);
        }else
            abort(404);
    }
    // Display the gallery creation form 
    public function create(){
        return view('gallery.create');
    }

    // Store the gallery form to the database
    public function store(Request $request){
        $formFilds = $request->validate([
            'name'=>'required',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'location' => 'required',
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')){
            $formFilds['logo'] = $request->file('logo')->store('pictires', 'public');
        }

        Listing::create($formFilds);

        return redirect('/')->with('message', 'Listing created sucessfully!');
    }
}
