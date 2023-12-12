<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    //
    public function index(){
        return view("event.index", [
            "events" => Event::latest()->paginate(4),
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
        if($request->hasFile("image")){
            $formFields["image"] = $request->file("image")->store("EventImages", "public");
        }
        Event::create($formFields);
        return redirect("/events/manage");
    }
    public function update(Request $request, Event $event){
        $formFields = $request->validate([
            "title" => "required",
            "description" => "required",
            "start_date" => "required",
            "end_date" => "required",
            "location_name" => "required",
        ]);
        if($request->hasFile("image")){
            $formFields["image"] = $request->file("image")->store("EventImages", "public");
        }
        $event->update($formFields);
        return redirect("/events/manage");
    }
    public function edit(Event $event){
        return view("event.edit", [
            "event" => $event
        ]);
    }
    public function destroy(Event $event){
        if($event->image && Storage::disk('public')->exists($event->image)) {
            Storage::disk('public')->delete($event->image);
        }
        $event->delete();
        return redirect("/events");
    }
    public function manage(){
        return view("event.manage",[
            "events" => Event::latest()->paginate(10)
        ]);
    }
    public function search(Request $request){
        $query = $request->input('query');
        $events = Event::where('title', 'like', "%$query%")
                    ->orWhere('description', 'like', "%$query%")
                    ->get();

        return view('event.search', compact('events'));
    }

}
