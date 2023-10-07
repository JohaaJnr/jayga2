<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\ListingImages;
use App\Http\Requests\StoreListingRequest;
use App\Http\Requests\UpdateListingRequest;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
      if($request->method() == 'POST'){
       $lister = $request->input('lister_id');
       
        $data = explode(',', $lister);
        $lister_name = $data[1];
        $lister_id = $data[0];
        $images = [];
        //check if exists
        $listing_user = Listing::where('lister_id', $lister_id)->get();
        if(count($listing_user)>0){
            return redirect()->back();
        }else{
            Listing::create([
                'lister_id' => $lister_id,
                'lister_name' => $lister_name,
                'guest_number' => $request->input('guest_num'),
                'bed_number' => $request->input('bedroom_num'),
                'bathroom_number' => $request->input('bathroom_num'),
                'listing_title' => $request->input('listing_title'),
                'listing_description' => $request->input('describe_listing'),
                'full_day_price_set_by_user' => $request->input('price'),
                'listing_address' => $request->input('listing_address'),
                'zip_code' => $request->input('zip_code'),
                'district' => $request->input('district'),
                'town' => $request->input('town'),
                'allow_short_stay' => $request->input('allow_short_stay'),
                'describe_peaceful' => $request->input('peaceful'),
                'describe_unique' => $request->input('unique'),
                'describe_familyfriendly' => $request->input('family_friendly'),
                'describe_stylish' => $request->input('stylish'),
                'describe_central' => $request->input('central'),
                'describe_spacious' => $request->input('spacious'),
                'private_bathroom' => $request->input('private_bathroom'),
                'door_lock' => $request->input('door_lock'),
                'breakfast_included' => $request->input('breakfast_included'),
                'unknown_guest_entry' => $request->input('unknown_guest_entry'),
                'listing_type' => $request->input('listing_type'),
            ]);

            $listing_image = Listing::where('lister_id', $lister_id)->get();
            if($files = $request->file('listing_pictures')){
                
                    foreach($files as $file){
                        $path = $file->store('/public/listing_pictures');
                        ListingImages::create([
                            'lister_id' => $lister_id,
                            'listing_id' => $listing_image[0]->listing_id,
                            'listing_file_name' => 'abc',
                            'listing_targetlocation' =>'joha',
                        ]);

                        return redirect('/admin');
                    }
                    
                }else{
                    return redirect()->back();
                }

        }
      

       
      
      
        

       return view('admin.dashboard');
      } 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreListingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Listing $listing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Listing $listing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateListingRequest $request, Listing $listing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Listing $listing)
    {
        //
    }
}
