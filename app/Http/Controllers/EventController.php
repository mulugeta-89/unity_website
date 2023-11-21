<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function index(){
        return view("event.index", [
            "events" => Event::latest()->get(),
        ]);
    }
    public function show(Event $event){
        return view("event.show",[
            "event" => $event
        ]);
    }
    public function create(){
        return view("event.create");
    }
    public function store(Request $request){
        $formFields = $request->validate([
            "title" => "required",
            "description" => "required",
            "start_date" => "required",
            "end_date" => "required",
            "location_name" => "required",
        ]);
        Event::create($formFields);
        return redirect("/");
    }
}
