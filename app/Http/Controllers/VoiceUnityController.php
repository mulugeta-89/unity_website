<?php

namespace App\Http\Controllers;

use App\Models\Voiceunity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VoiceUnityController extends Controller
{
    //
    public function index()
    {
        // This function retrieves the latest Voiceunity records from the database
        // and paginates the results, displaying 10 records per page
        // It then renders the 'voice.index' view with the Voiceunity data
        return view("voice.index", [
            "voices" => Voiceunity::latest()->paginate(10)
        ]);
    }

    public function manage()
    {
        // This function is similar to the 'index' function
        // It retrieves the latest Voiceunity records from the database
        // and paginates the results, displaying 10 records per page
        // It then renders the 'voice.manage' view with the Voiceunity data
        return view("voice.manage", [
            "voices" => Voiceunity::latest()->paginate(10)
        ]);
    }

    public function create()
    {
        // This function renders the 'voice.create' view
        // which likely contains a form for creating a new Voiceunity record
        return view("voice.create");
    }

    public function edit(Voiceunity $voice)
    {
        // This function retrieves the specified Voiceunity record
        // and renders the 'voice.edit' view with the Voiceunity data
        // allowing the user to edit the record
        return view("voice.edit", [
            "voice" => $voice
        ]);
    }

    public function store(Request $request)
    {
        // This function handles the form submission for creating a new Voiceunity record
        $formFields = $request->validate([
            "title" => "required", // Validate that the 'title' field is required
            "pdf_file" => "required|mimes:pdf|max:7168" // Validate that the 'pdf_file' field is required, a PDF file, and not larger than 7MB
        ]);

        // If a PDF file is uploaded, store it in the 'VoiceOfUnity' directory
        if ($request->hasFile("pdf_file")) {
            $formFields["pdf_file"] = $request->file("pdf_file")->store("VoiceOfUnity", "public");
        }

        // Create a new Voiceunity record with the validated form data
        Voiceunity::create($formFields);

        // Redirect to the Voiceunity management page after creating the record
        return redirect("/voiceofunity/manage");
    }

    public function update(Request $request, Voiceunity $voice)
    {
        // This function handles the form submission for updating an existing Voiceunity record
        $formFields = $request->validate([
            "title" => "required", // Validate that the 'title' field is required
            "pdf_file" => "required" // Validate that the 'pdf_file' field is required
        ]);

        // If a new PDF file is uploaded, store it in the 'VoiceOfUnity' directory
        if ($request->hasFile("pdf_file")) {
            $formFields["pdf_file"] = $request->file("pdf_file")->store("VoiceOfUnity", "public");
        }

        // Update the specified Voiceunity record with the validated form data
        $voice->update($formFields);

        // Redirect to the Voiceunity management page after updating the record
        return redirect("/voiceofunity/manage");
    }

    public function destroy(Voiceunity $voice)
    {
        // This function handles deleting an existing Voiceunity record
        if ($voice->pdf_file && Storage::disk('public')->exists($voice->pdf_file)) {
            Storage::disk('public')->delete($voice->pdf_file); // Delete the associated PDF file from storage
        }

        $voice->delete(); // Delete the Voiceunity record

        // Redirect to the Voiceunity management page after deleting the record
        return redirect("/voiceofunity/manage");
    }

}
