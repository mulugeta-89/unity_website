<?php

namespace App\Http\Controllers;

use App\Models\Advertisment;
use Illuminate\Http\Request;
use App\Models\Advertisments;
use Illuminate\Support\Facades\Storage;

class AdvertismentController extends Controller
{
    //
    public function index(){
        // dd(Advertisments::latest()->get());
        return view("advertisments.index",[
            "advertisments" => Advertisments::latest()->get()
        ]);
    }
    public function create(){
        return view("advertisments.create");
    }
    public function edit(Advertisments $advert){
        return view("advertisments.edit",[
            "advert" => $advert
        ]);
    }
    
    public function store(Request $request){
        $formFields = $request->validate([
            "image" => "required",
        ]);
        if($request->hasFile("image")){
            $formFields["image"] = $request->file("image")->store("AdvertismentImages", "public");
        }
        Advertisments::create($formFields);
        return redirect("/advertisments/manage");
    }
    public function update(Request $request, Advertisments $advert){
        $formFields = $request->validate([
            "image" => "required",
        ]);
        if($request->hasFile("image")){
            $formFields["image"] = $request->file("image")->store("AdvertismentImages", "public");
        }
        $advert->update($formFields);
        return redirect("/advertisments/manage");
    }
    public function show(Advertisments $advert){
        return view("advertisments.show",[
            "advert" => $advert
        ]);
    }
    public function manage(){
        return view("advertisments.manage",[
            "advertisments" => Advertisments::latest()->get()
        ]);
    }
    public function destroy(Advertisments $advert){
        if($advert->image && Storage::disk('public')->exists($advert->image)) {
            Storage::disk('public')->delete($advert->image);
        }
        $advert->delete();
        return redirect("/advertisments/manage");
    }
}
