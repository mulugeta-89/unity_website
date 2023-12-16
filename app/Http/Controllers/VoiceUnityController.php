<?php

namespace App\Http\Controllers;

use App\Models\Voiceunity;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
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

}
