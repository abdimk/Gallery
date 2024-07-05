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
        // ['listings'=>Listing::latest()->filter(request(['tag','search']))->paginate(6)
        ['listings'=>Listing::latest()->paginate(6)
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
            $formFilds['logo'] = $request->file('logo')->store('pictures', 'public');
        }

        Listing::create($formFilds);

        return redirect('/')->with('message', 'Listing created sucessfully!');
    }


    // Show the listing from
    public function edit(Listing $listing){
        if($listing){
            return view('gallery.edit', ['listing'=>$listing]);
        }else
            abort(404);
    }

    //Update the listing form 
    public function update(Request $request, Listing $listing){
        $formFilds = $request->validate([
            'name'=>'required',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'location' => 'required',
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')){
            $formFilds['logo'] = $request->file('logo')->store('pictures', 'public');
        }

        $listing->update($formFilds);

        return back()->with('message', 'Listing updated sucessfully!');

    }


    // Delete a gallery listing grom the database 
    public function destroy(Listing $listing){
        if($listing){
            $listing->delete();
        }else
            abort(404,'Listing could not be found!');

        return redirect('/')->with('message', 'Gallery has been deleted sucessfully!');
    }

    // update the listing form 
    //Search for the listings in the gallery
    // public function search(Request $request){
    //     dd($request);
    // }
}
