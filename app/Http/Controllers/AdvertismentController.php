<?php

namespace App\Http\Controllers;

use App\Models\Advertisment;
use Illuminate\Http\Request;
use App\Models\Advertisments;
use Illuminate\Support\Facades\Storage;

class AdvertismentController extends Controller
{
    //
    public function index()
    {
        return view("advertisments.index", [
            "advertisments" => Advertisments::latest()->get() // This line retrieves all advertisments from the database ordered by the latest first and passes them to the view
        ]);
    }

    public function create()
    {
        return view("advertisments.create"); // This function renders the 'create' view for creating a new advertisment
    }

    public function edit(Advertisments $advert)
    {
        return view("advertisments.edit", [
            "advert" => $advert // This function renders the 'edit' view and passes the $advert object to be edited
        ]);
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            "image" => "required", // This line validates that the 'image' field is required
        ]);

        if ($request->hasFile("image")) {
            $formFields["image"] = $request->file("image")->store("AdvertismentImages", "public"); // If an image file is uploaded, this line stores it in the 'AdvertismentImages' directory and updates the $formFields array with the file path
        }

        Advertisments::create($formFields); // This line creates a new advertisment record in the database using the validated $formFields data
        return redirect("/advertisments/manage"); // After creating the advertisment, it redirects to the 'manage' route
    }

    public function update(Request $request, Advertisments $advert)
    {
        $formFields = $request->validate([
            "image" => "required", // This line validates that the 'image' field is required
        ]);

        if ($request->hasFile("image")) {
            $formFields["image"] = $request->file("image")->store("AdvertismentImages", "public"); // If an image file is uploaded, this line stores it in the 'AdvertismentImages' directory and updates the $formFields array with the file path
        }

        $advert->update($formFields); // This line updates the existing advertisment record with the validated $formFields data
        return redirect("/advertisments/manage"); // After updating the advertisment, it redirects to the 'manage' route
    }

    public function show(Advertisments $advert)
    {
        return view("advertisments.show", [
            "advert" => $advert // This function renders the 'show' view and passes the $advert object to be displayed
        ]);
    }

    public function manage()
    {
        return view("advertisments.manage", [
            "advertisments" => Advertisments::latest()->get() // This function renders the 'manage' view and passes all advertisments ordered by the latest first
        ]);
    }

    public function destroy(Advertisments $advert)
    {
        if ($advert->image && Storage::disk('public')->exists($advert->image)) {
            Storage::disk('public')->delete($advert->image); // If the advertisment has an associated image file, this line deletes the image file from the 'public' storage disk
        }

        $advert->delete(); // This line deletes the advertisment record from the database
        return redirect("/advertisments/manage"); // After deleting the advertisment, it redirects to the 'manage' route
    }
}
