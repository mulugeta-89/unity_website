<?php

namespace App\Http\Controllers;

use App\Models\Voiceunity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VoiceUnityController extends Controller
{
    //
    public function index(){
        return view("voice.index",[
            "voices" => Voiceunity::latest()->paginate(10)
        ]);
    }
    public function manage(){
        return view("voice.manage",[
            "voices" => Voiceunity::latest()->paginate(10)
        ]);
    }
    public function create(){
        return view("voice.create");
    }
    public function edit(Voiceunity $voice){
        return view("voice.edit",[
            "voice" => $voice
        ]);
    }
    public function store(Request $request){
        $formFields = $request->validate([
            "title" => "required",
            "pdf_file" => "required|mimes:pdf|max:7168"
        ]);
        if($request->hasFile("pdf_file")){
            $formFields["pdf_file"] = $request->file("pdf_file")->store("VoiceOfUnity", "public");
        }
        Voiceunity::create($formFields);
        return redirect("/voiceofunity/manage");

    }
    public function update(Request $request, Voiceunity $voice){
        $formFields = $request->validate([
            "title" => "required",
            "pdf_file" => "required"
        ]);
        if($request->hasFile("pdf_file")){
            $formFields["pdf_file"] = $request->file("pdf_file")->store("Advertismentpdf_files", "public");
        }
        $voice->update($formFields);
        return redirect("/voiceofunity/manage");
    }
    public function destroy(Voiceunity $voice){
        if($voice->pdf_file && Storage::disk('public')->exists($voice->pdf_file)) {
            Storage::disk('public')->delete($voice->pdf_file);
        }
        $voice->delete();
        return redirect("/voiceofunity/manage");
    }

}
