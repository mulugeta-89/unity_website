<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    //
    public function index(){
        $events = Event::with('images')->latest()->paginate(4);
        return view("event.index", compact("events"));
    }
    public function show(Event $event){
        $eventWithImages = $event->load('images');
        return view("event.show",[
            "event" => $eventWithImages
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
        $event = Event::create($formFields);
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('EventImages', "public");
                EventImage::create([
                    'event_id' => $event->id,
                    'photo_path' => $imagePath,
                ]);
            }
        }
        
        return redirect("/events");
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
